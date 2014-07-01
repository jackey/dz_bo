(function ($) {
  var AdminModule = angular.module("adminModule", []);
  
  // 文件上传Service
  AdminModule.factory("UploadMediaService", ["$http" ,function ($http) {
    function upload(file) {
      file = file.files[0];
      // 上传
      var formdata = new FormData();
      formdata.append("media", file);
      return $.ajax({
        url: window.baseurl + "/api/media/temp",
        type: "post",
        data: formdata,
        processData: false,
        contentType: false
      });
    };
    
    return {
      upload: upload
    };
  }]);

  // 加载的 Sevrice
  AdminModule.factory("LoadingIconService", function () {
    return {
      // 打开loading
      open: function () {
        angular.element(".loading").removeClass("hideme");
      },
      // 关闭
      close: function () {
        angular.element(".loading").addClass("hideme");
      }
    };
  });

  // Lookbook service
  AdminModule.factory("LookbookService", function () {
    function loadLookbookWithBrand(brand) {
      return $.ajax({
        url: window.baseurl + "/api/lookbook/index",
        data: {brand: brand},
        type: "get",
      });
    };
    
    function addNewLookbook(model) {
      return $.ajax({
        url: window.baseurl + "/api/lookbook/add",
        data: model,
        type: "post"
      });
    }
    
    return {
      loadLookbookWithBrand: loadLookbookWithBrand,
      addNewLookbook: addNewLookbook
    };
  });
  
  AdminModule.controller("MediaGallery", function ($scope, $http,$location, UploadMediaService, LookbookService, LoadingIconService) {
    $scope.GalleryInit = function () {
      LoadingIconService.open();
      LookbookService.loadLookbookWithBrand(window.brand).done(function (ret) {
        // 成功
        if (ret && typeof ret["status"] != "undeifned" && ret["status"] == 0) {
          $scope.lookbookes = ret["data"];
          $scope.$digest();
        }
      }).always(function () {
        LoadingIconService.close();
      });
      
      $scope.object = {};
      $scope.object.title = "gallery item";
      $scope.object.brand = window.brand;
    };
    
    $scope.UploadMedia = function(event){
      var file = angular.element(event.target).siblings("input[name='media']");
      if (file[0].files["length"] == 0) {
        return;
      }
      LoadingIconService.open();
      UploadMediaService.upload(file[0]).done(function (ret) {
        // 成功
        if (ret && typeof ret["status"] != "undeifned" && ret["status"] == 0) {
          // 然后添加新的lookbook item
          var object = $scope.object;
          object.image = ret["data"]["uri"];
          LookbookService.addNewLookbook(object).done(function (ret) {
            $scope.lookbookes.push(ret["data"]);
            $scope.$digest();
          }).always(function () {
            LoadingIconService.close();
          });
        }
      });
    };
  });
  
  AdminModule.controller("NewsTable", [function () {
      angular.element(".table-content .table").DataTable({
        info: false,
        pageLength: 10,
        lengthChange: false
      });
  }]);

  AdminModule.controller("NewsForm", ["$scope", "$http", function ($scope, $http) {
      $scope.media = {};
      $scope.media.image = "";
      $scope.news = {};
      $scope.news.thumbnail = "";
      
      $scope.init = function () {
        
        // 加载 news 对象
        var cid = angular.element("input[name='cid']").val();
        if (cid > 0 )  {
          $http({
            method: "get",
            params: {news_id: cid},
            url: window.baseurl + "/api/news/index"
          })
          .success(function (res) {
            if (typeof res["status"] != 'undefined' && res["status"] == 0 ){ 
              var data = res["data"];
              $scope.news = data;
              $scope.media.image = data.thumbnail;
            }
            else {
              alert("未知错误");
            }
          });
        }
        
        // 绑定图片上传事件
        angular.element("input[type='file']").live("change", function(event) {
          var el = angular.element(event.target);
          var file = el[0].files[0];
          var fileReader = new FileReader();
          fileReader.onloadend = function (e) {
            $scope.media.image = (e.target.result);
            $scope.$digest();
          };
          fileReader.readAsDataURL(file);

          // 上传
          var formdata = new FormData();
          formdata.append("media", file);
          $.ajax({
            url: window.baseurl + "/api/media/temp",
            type: "post",
            data: formdata,
            processData: false,
            contentType: false,
            success: function (res) {
              if (typeof res["status"] != "undefined") {
                var uri = res["data"]["uri"];
                $scope.news.thumbnail = (uri);
                $scope.$digest();
              }
              else {
                alert("未知错误");
              }
            }
          });
        });
      };
      
      $scope.submitNews = function (event) {
        var body = CKEDITOR.instances.body;
        var bodyhtml = body.getData();
        $scope.news.body = bodyhtml;
        
        if ($scope.newsform.$valid) {
          $http({
            method: "POST",
            url: window.baseurl + "/api/news/add",
            data: $.param($scope.news),
            headers: {"Content-Type": "application/x-www-form-urlencoded"}
          })
          .success(function (data) {
            window.location.href = window.baseurl + "/page/news";
          });
        }
        else {
          alert("验证失败");
        }
      };
  }]);

  AdminModule.controller("CententTable", ["$scope", "$http", function ($scope, $http) {
      angular.element(".table-content .table").DataTable({
        info: false,
        pageLength: 10,
        lengthChange: false
      });
  }]);

  AdminModule.controller("ContentForm", ["$scope", "$http" ,function ($scope, $http) {
    
    $scope.content = {};
    
    //初始化
    $scope.init = function () {
        // 加载 Job 对象
        var cid = angular.element("input[name='cid']").val();
        $http({
          method: "get",
          params: {id: cid},
          url: window.baseurl + "/api/lookbookgallery/index"
        })
        .success(function (res) {
          if (typeof res["status"] != 'undefined' && res["status"] == 0 ){ 
            var data = res["data"];
            $scope.content = data;
          }
          else {
            alert("未知错误");
          }
        });
    };
    
    $scope.submitForm = function () {
      if ($scope.contentForm.$valid) {
          $http({
            method: "POST",
            url: window.baseurl + "/api/lookbookgallery/add",
            data: $.param($scope.content),
            headers: {"Content-Type": "application/x-www-form-urlencoded"}
          })
          .success(function (data) {
            window.location.href = window.baseurl + "/page/lookbookgallery";
          });
      }
      else {
        alert("表单验证失败");
      }
    };
  }]);

  // 内容删除
  angular.element("a[data-cid]").click(function (event) {
    var el = angular.element(this);
    var cid = el.attr("data-cid");
    if (cid > 0) {
      if (confirm("Delete this content ?")) {
        $.ajax({
          type: "GET",
          data: ({cid: cid}),
          url: window.baseurl + "/api/content/delete",
          headers: {"Content-Type": "application/x-www-form-urlencoded"},
        })
        .success(function () {
          alert("Delete Success");
          window.location.reload();
        });
      }
    }
  });
  
  // 多语言切换
  angular.element("a[lang]").click(function () {
    jQuery.cookie('lang' , $(this).attr('lang') , { expires: 7, path: '/' });
    window.location.reload();
  });
  
})(jQuery);