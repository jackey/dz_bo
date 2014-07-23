(function ($) {
  var AdminModule = angular.module("adminModule", []);
  
  AdminModule.directive("ngCkeditor", function () {
    return {
      restrict: "A",
      require: ["ngModel"],
      scope: false,
      link: function (scope, element, attrs, ctrls) {
        var ngModel = ctrls[0];
        var ckeditor = CKEDITOR.replace(element[0], {customConfig: window.baseurl + "/scripts/config.js"});
        setInterval(function () {
          if(ckeditor.checkDirty()) {
            var data = ckeditor.getData();
            if (ngModel.$viewValue != data) {
              ngModel.$setViewValue(data);
            }
          }
        }, 200);
        
        ckeditor.on("instanceReady", function() {
          var data = ngModel.$viewValue;
          ckeditor.setData(data);
        });
      }
    };
  });
  
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
    
    function uploadVideo(file) {
      file = file.files[0];
      // 上传
      var formdata = new FormData();
      formdata.append("media", file);
      return $.ajax({
        url: window.baseurl + "/api/media/videotemp",
        type: "post",
        data: formdata,
        processData: false,
        contentType: false
      });
    }
    
    return {
      upload: upload,
      uploadVideo: uploadVideo
    };
  }]);

  AdminModule.factory("ArrivalService", [function () {
    function loadArrivalWithBrand(brand) {
      return $.ajax({
        url: window.baseurl + "/api/arrival/index",
        data: {brand: brand},
        type: "get",
      });
    };
    
    function addNewArrival(model) {
      return $.ajax({
        url: window.baseurl + "/api/arrival/add",
        data: model,
        type: "post"
      });
    }
    
    function remove(cids) {
      return $.ajax({
        url: window.baseurl + "/api/content/delete",
        data: $.param({cid: cids}),
        type: "POST"
      });
    }
    
    return {
      loadArrivalWithBrand: loadArrivalWithBrand,
      addNewArrival: addNewArrival,
      remove: remove
    };
  }]);

  
  AdminModule.factory("ShopService", [function () {
      function location() {
        return $.ajax({
          url: window.baseurl+ "/api/shop/location",
          type: "GET"
        });
      }
      
      function update(data) {
        console.log("update data: ");
        console.log(data);
        console.log($.param(data));
        return $.ajax({
          url: window.baseurl+"/api/shop/add",
          type: "post",
          data: $.param(data)
        });
      }
      
      function load(shop_id) {
        return $.ajax({
          url: "/api/shop/index",
          data: {shop_id: shop_id},
          type: "GET"
        });
      }
      
      return {
        location: location,
        update: update,
        load: load
      };
  }]);

  AdminModule.factory("CareerService", [function () {
      function update(data) {
        return $.ajax({
          url: "/api/job/add",
          data: $.param(data),
          type: "POST"
        });
      }
      
      function load(cid) {
        return $.ajax({
          url: "/api/job",
          data: {cid: cid},
          type: "GET"
        });
      }
      return {
        update: update,
        load: load
      };
  }]);

  AdminModule.factory("ContactService", [function () {
      function update(data) {
        return $.ajax({
          url: window.baseurl + "/api/content/updatecontact",
          type: "post",
          data: $.param(data)
        });
      }
      
      function load() {
        return $.ajax({
          url: "/api/content/contact"
        });
      }
      return {
        update: update,
        load: load
      };
  }]);

  AdminModule.factory("VideoContentService", [function () {
      function add(data) {
        return $.ajax({
          url: "/api/videocontent/add",
          type: "POST",
          data: $.param(data)
        });
      }
      function deleteFn() {
        //
      }
      
      function load(cid) {
        return $.ajax({
          url: "/api/videocontent/view",
          type: "GET",
          data: {id: cid}
        });
      }
      
      return {
        add: add,
        "delete": deleteFn,
        load: load
      };
  }]);

  AdminModule.factory("QRCodeService", function () {
    function update(data) {
      return $.ajax({
        url: "/api/qrcode/add",
        type: 'post',
        data: $.param(data)
      });
    }
    
    function load(cid) {
        return $.ajax({
          type: "get",
          data: {id: cid},
          url: "/api/qrcode/index"
        });
    }
    
    return {update: update, load: load};
  });

  AdminModule.factory("BrandInfoService", [function () {
      function load() {
        return $.ajax({
          url: "/api/content/loadbrandinfo",
          type: "get"
        });
      }
      
      function update(data) {
        // TODO::
        return $.ajax({
          url: "/api/content/updatebrandinfo",
          type: "POST",
          data: $.param(data)
        });
      }
      
      function loadBrand(brand) {
        return $.ajax({
          url: "/api/content/loadbrand",
          data: {brand: brand},
          type: "get"
        });
      }
      
      function updateBrand(brand, data) {
        data["brand"] = brand;
        return $.ajax({
          url: "/api/content/updatabrand",
          data: data,
          type: "POST"
        });
      }
      
      return {
        load: load,
        update: update,
        loadBrand: loadBrand,
        updateBrand: updateBrand
      };
  }]);

  AdminModule.factory("CorporateService", [function () {
      function load() {
        return $.ajax({
          url: window.baseurl + "/api/content/corporate",
        });
      }
      
      function update(data) {
        console.log($.param(data));
        return $.ajax({
          url: window.baseurl + "/api/content/updatecorporate",
          type: "post",
          data: $.param(data)
        });
      }
      
      return {
        load: load,
        update: update
      };
  }]);

  // Menu Navigation Service
  AdminModule.factory("NavigationMenuService", ["$http", function ($http) {
      function loadNavMenu() {
        return $.ajax({
          url: window.baseurl + "/api/navigation/index",
          type: "get"
        });
      }
      
      function updateNavMenu(data) {
        return $.ajax({
          type: "post",
          url: window.baseurl + "/api/navigation/add",
          data: $.param(data)
        });
      }
      
      return {
        loadNavMenu: loadNavMenu,
        updateNavMenu: updateNavMenu
      };
  }]);

  // 加载效果的 Sevrice
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
    
    function removeLookbook(cids) {
      return $.ajax({
        url: window.baseurl + "/api/content/delete",
        data: $.param({cid: cids}),
        type: "POST"
      });
    }
    
    return {
      loadLookbookWithBrand: loadLookbookWithBrand,
      addNewLookbook: addNewLookbook,
      removeLookbook: removeLookbook
    };
  });
  
  AdminModule.controller("ArrivalGallery", function ($scope, UploadMediaService, ArrivalService, LoadingIconService) {
    $scope.GalleryInit = function () {
      LoadingIconService.open();
      ArrivalService.loadArrivalWithBrand(window.brand).done(function (ret) {
        // 成功
        if (ret && typeof ret["status"] != "undeifned" && ret["status"] == 0) {
          $scope.arrivales = ret["data"];
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
          ArrivalService.addNewArrival(object).done(function (ret) {
            $scope.arrivales.push(ret["data"]);
            $scope.$digest();
          }).always(function () {
            LoadingIconService.close();
          });
        }
      });
    };
    
    $scope.RemoveMedia = function (event) {
      var deleted_cids = [];
      $(".checked").each(function () {
        deleted_cids.push($("> span", angular.element(this)).attr("data-cid"));
      });
      
      LoadingIconService.open();
      ArrivalService.remove(deleted_cids).done(function (ret) {
        $scope.GalleryInit();
        LoadingIconService.close();
      });
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
    
    $scope.RemoveMedia = function (event) {
      var deleted_cids = [];
      $(".checked").each(function () {
        deleted_cids.push($("> span", angular.element(this)).attr("data-cid"));
      });
      
      LoadingIconService.open();
      LookbookService.removeLookbook(deleted_cids).done(function (ret) {
        $scope.GalleryInit();
        LoadingIconService.close();
      });
    };
  });
  
  AdminModule.controller("NewsTable", [function () {
//      angular.element(".table-content .table").DataTable({
//        info: false,
//        pageLength: 10,
//        lengthChange: false
//      });
  }]);

  AdminModule.controller("NewsForm", ["$scope", "$http", function ($scope, $http) {
      $scope.media = {};
      $scope.editorOptions = {};
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
                if ($scope.news.thumbnail) {
                  $scope.news.thumbnail.push(uri);
                }
                else {
                  $scope.news.thumbnail = [uri];
                }
                
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

  AdminModule.controller("ShopController", ["$scope", "$http"
    , "LoadingIconService"
    , "ShopService"
    , function ($scope, $http, LoadingIconService, ShopService) {
      
      $scope.shop = {};
      
      // 自动在地图搜索地址
      var timer;
      $scope.$watch("shop.address", function () {
        if ($scope.updatedByMap) {
          return;
        }
        address = $scope.shop.address;
        if (address) {
          if (timer) {
            clearTimeout(timer);
          }
          timer = setTimeout(function () {
              var local = new BMap.LocalSearch($scope.map, {
                renderOptions: {map: $scope.map}
              });
              local.enableAutoViewport();
              local.search(address);
              local.setMarkersSetCallback(function (pois) {
                $.each(pois, function (index) {
                  var poi = pois[index];
                  poi.marker.addEventListener("click", function () {
                    $scope.shop.address = poi.address;
                    $scope.updatedByMap = true;
                  });
                });
              });
          }, 1000);
        }
      });
      
      $scope.addressChanged = function () {
        $scope.updatedByMap = false;
      };
      
      // 初始化
      $scope.init = function () {
        LoadingIconService.open();
        // 百度地图
        var map = $scope.map = new BMap.Map("shop-map");
        map.enableDragging();
        map.centerAndZoom(new BMap.Point(121.48, 31.22), 15);  
        map.addControl(new BMap.ScaleControl());
        map.addControl(new BMap.NavigationControl()); 
        map.addEventListener("click", function(e){    
         var point = new BMap.Point(e.point.lat, e.point.lng);
         var marker = new BMap.Marker(point);
         map.addOverlay(marker);
         $scope.shop.lat = e.point.lat;
         $scope.shop.lng = e.point.lng;
         $scope.$digest();
        });
        
        // Location 选项
        ShopService.location().done(function (data) {
          $scope.location = data["data"];
          $scope.country_city = [];
          for (index in $scope.location) {
            var city = $scope.location[index];
            $scope.country_city.push(city[0]);
          }
          $scope.$digest();
          LoadingIconService.close();
        });
        
        // Load Shop
        var shop_id = angular.element("input[name='shop_id']").val();
        ShopService.load(shop_id).done(function (data){
          if (typeof data["data"] != "undefined" && typeof data["data"].length == "undefined") {
            $scope.shop = data["data"];
          }
          console.log($scope.shop);
          $scope.city_distinct = [];
          for (index in $scope.location) {
            var city = $scope.location[index];
            if (city[0] == $scope.shop.city) {
              $scope.city_distinct = city[1];
            }
          }
          $scope.$digest();
        });
      };
      
      $scope.submitForm = function () {
        ShopService.update($scope.shop).done(function (data) {
          console.log(data);
        });
      };
      
      $scope.cityChange = function () {
        $scope.city_distinct = [];
        for (index in $scope.location) {
          var city = $scope.location[index];
          if (city[0] == $scope.shop.city) {
            $scope.city_distinct = city[1];
            $scope.map.centerAndZoom(city[0], 8);
          }
        }
      };
      
      $scope.distinctChange = function () {
        $scope.map.centerAndZoom($scope.shop.city + " " + $scope.shop.distinct, 10);
      };
      
      $scope.showToggle = function (event) {
        var el = angular.element(event.target);
        el.siblings(".control-group").toggleClass("hideme");
      };
    }]);

  AdminModule.controller("CareerController", ["$scope", "$http"
     , "LoadingIconService"
    , "CareerService"
    , function ($scope, $http, LoadingIconService, CareerService) {
      $scope.formdata = {};
      // 初始化
      $scope.init = function () {
        var cid = angular.element("input[name='cid']").val();
        if (cid) {
          CareerService.load(cid).done(function (data) {
            if (data["status"] == 0) {
              $scope.formdata = data["data"];
              $scope.$digest();
            }
          });
        }
      };
      
      $scope.submitForm = function () {
        LoadingIconService.open();
        CareerService.update($scope.formdata).done(function (data) {
          LoadingIconService.close();
        });
      };
    }]);

  AdminModule.controller("ContentForm", ["$scope", "$http" ,function ($scope, $http) {
    
    $scope.content = {};
    
    //初始化
    $scope.init = function () {
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

  AdminModule.controller("ContactController", ["$scope", "$http"
    , "LoadingIconService"
    , "ContactService"
    , function ($scope, $http, LoadingIconService, ContactService) {
      $scope.formdata = {};
      
      $scope.init = function () {
        LoadingIconService.open();
        ContactService.load().done(function (data) {
          LoadingIconService.close();
          $scope.formdata = data["data"];
          $scope.$digest();
        });
      };
      
      $scope.submitForm = function () {
        LoadingIconService.open();
        ContactService.update($scope.formdata).done(function (data) {
        LoadingIconService.close();
        });
      };
    }]);

  AdminModule.controller("Corporate", ["$scope", "$http"
  , "LoadingIconService"
  , "CorporateService"
  , "UploadMediaService"
  , function ($scope, $http, LoadingIconService, CorporateService, UploadMediaService) {
    $scope.formdata = {};
    $scope.init = function () {
      LoadingIconService.open();
      CorporateService.load().done(function (data) {
        LoadingIconService.close();
        if (data["data"]) {
          $scope.formdata = data["data"];
        }
        $scope.$digest();
      });
    };
    
    $scope.fileChange = function (self) {
      self = angular.element(self);
      LoadingIconService.open();
      UploadMediaService.upload(self.get(0)).done(function (data) {
        LoadingIconService.close();
        $scope.formdata.thumbnail = data["data"]["uri"];
        $scope.$digest();
      });
    };
    
    // submit form
    $scope.submitForm = function () {
      LoadingIconService.open();
      CorporateService.update($scope.formdata).done(function (data) {
        LoadingIconService.close();
      });
    };
  }]);

  AdminModule.controller("VideoTable", ["$scope", "$http"
    , "LoadingIconService"
    , "VideoContentService", function ($scope, $http, LoadingIconService, VideoContentService) {
      $scope.init = function () {
        
      };
  }]);
  
  
  AdminModule.controller("VideoFormController", ["$scope", "$http"
    , "LoadingIconService"
    , "VideoContentService"
    , "UploadMediaService", function ($scope, $http, LoadingIconService, VideoContentService, UploadMediaService) {
      $scope.formdata = {};
      
      $scope.init = function () {
        var cid = angular.element("input[name='cid']").val();
        if (cid) {
          $scope.formdata.cid = cid;
          LoadingIconService.open();
          VideoContentService.load(cid).done(function (data) {
            if (data["status"] == 0) {
              $scope.formdata = data["data"];
              $scope.$digest();
              LoadingIconService.close();
            }
          });
        }
      };
      
      $scope.filechange = function (self) {
        self = angular.element(self);
        var name = self.next("input[type='hidden']").attr("ng-model");
        if (self.attr("accept").indexOf("image") != -1) {
          name = name.replace(/formdata\./, "");
          LoadingIconService.open();
          UploadMediaService.upload(self.get(0)).done(function (data) {
            LoadingIconService.close();
            $scope.formdata[name] = data["data"]["uri"];
            $scope.$digest();
          });
        }
        else {
          name = name.replace(/formdata\./, "");
          LoadingIconService.open();
          UploadMediaService.uploadVideo(self.get(0)).done(function (data) {
            LoadingIconService.close();
            if (data["status"] == 0) {
              $scope.formdata[name] = data["data"]["uri"];
              $scope.$digest();
            }
            else {
              self.val("");
              alert(data["message"]);
            }
          });
        }
      };
      
      $scope.submitForm = function () {
        LoadingIconService.open();
        VideoContentService.add($scope.formdata).done(function (data) {
          //TODO::
          LoadingIconService.close();
        });
      };
    }]);

  AdminModule.controller("BrandinfoController", ["$scope", "$http"
  , "LoadingIconService"
  , "BrandInfoService"
  , "UploadMediaService", function ($scope, $http, LoadingIconService, BrandInfoService, UploadMediaService) {
    
    $scope.formdata = {};
    $scope.init = function () {
      LoadingIconService.open();
      BrandInfoService.load().done(function (data) {
        LoadingIconService.close();
        if (data["status"] == 0) {
          $scope.formdata = data["data"];
          $scope.$digest();
        }
      });
    };
    
    $scope.fileChange = function (self){
      self = angular.element(self);
      var name = self.siblings("input[type='hidden']").attr("ng-model");
      name = name.replace(/formdata\./, "");
      LoadingIconService.open();
      UploadMediaService.upload(self.get(0)).done(function (data) {
        LoadingIconService.close();
        $scope.formdata[name] = data["data"]["uri"];
        $scope.$digest();
      });
    };
    
    $scope.submitForm = function () {
      LoadingIconService.open();
      BrandInfoService.update($scope.formdata).done(function (data) {
        LoadingIconService.close();
        console.log(data);
      });
    };
    
  }]);

  AdminModule.controller("QrcodeController", ["$scope", "$http"
    , "LoadingIconService"
    , "QRCodeService"
    , "UploadMediaService", function ($scope, $http, LoadingIconService, QRCodeService, UploadMediaService) {
      $scope.formdata = {};
      var cid = angular.element("input[name='cid']").val();
      $scope.init = function () {
        LoadingIconService.open();
        QRCodeService.load(cid).done(function (data) {
          LoadingIconService.close();
          if (data["data"]) {
            $scope.formdata = data["data"];
            $scope.$digest();
          }
        });
      };
      
      $scope.filechange = function (self) {
        self = angular.element(self);
        var name = self.next("input[type='hidden']").attr("ng-model");
        name = name.replace(/formdata\./, "");
        LoadingIconService.open();
        UploadMediaService.upload(self.get(0)).done(function (data) {
          LoadingIconService.close();
          $scope.formdata[name] = data["data"]["uri"];
          $scope.$digest();
        });
      };
      
      $scope.submitForm = function () {
        LoadingIconService.open();
        QRCodeService.update($scope.formdata).done(function (data) {
          LoadingIconService.close();
          window.location.href = window.baseurl + "/page/qrcode";
        });
      };
    }]);
  
  AdminModule.controller("BrandController", ["$scope", "$http"
    , "LoadingIconService"
    , "UploadMediaService"
    , "BrandInfoService"
    , function ($scope, $http, LoadingIconService, UploadMediaService, BrandInfoService) {
      
      $scope.formdata = {};
      
      // 初始化
      $scope.init = function () {
        LoadingIconService.open();
        $scope.brand = angular.element("input[name='brand']").val();
        BrandInfoService.loadBrand($scope.brand).done(function (data) {
          if (data["status"] == 0 ) {
            $scope.formdata = data["data"];
            $scope.$digest();
          }
          LoadingIconService.close();
        });
      };
      
      $scope.filechange = function (self){
        self = angular.element(self);
        var name = self.siblings("input[type='hidden']").attr("ng-model");
        name = name.replace(/formdata\./, "");
        LoadingIconService.open();
        UploadMediaService.upload(self.get(0)).done(function (data) {
          LoadingIconService.close();
          $scope.formdata[name] = data["data"]["uri"];
          $scope.$digest();
        });
      };
      
      $scope.submitForm = function () {
        LoadingIconService.open();
        BrandInfoService.updateBrand($scope.brand, $scope.formdata).done(function (data) {
          LoadingIconService.close();
        });
      };
      
    }]);

  AdminModule.controller("MenuNavigation", ["$scope", "$http"
    , "LoadingIconService"
    , "NavigationMenuService" 
    , "UploadMediaService"
    , function ($scope, $http, LoadingIconService, NavigationMenuService, UploadMediaService) {
    
    $scope.formdata = {};
    
    // 表单初始化
    $scope.init = function () {
      LoadingIconService.open();
      NavigationMenuService.loadNavMenu().done(function (data) {
        if (typeof data["data"] == "undefined") {
          // 没有数据 我们就不做任何处理
        }
        else {
          $scope.formdata = data["data"];
          $scope.$digest();
        }
        LoadingIconService.close();
      });
    };
    
    // 提交表单
    $scope.submitForm = function () {
      LoadingIconService.open();
      NavigationMenuService.updateNavMenu($scope.formdata).done(function (data) {
        LoadingIconService.close();
      });
    };
    
    // 触发上传文件
    $scope.triggerImageUpload = function (event) {
      return;
      var self = $(event.currentTarget);
      self.addClass("uploading");
      var file = angular.element("input[name='file']");
      file.trigger("click");
    };
    
    // 文件上传事件
    $scope.fileUpload = function (self) {
      var file = $(self).get(0);
      if (file.files.length) {
        LoadingIconService.open();
      }
      UploadMediaService.upload(file).done(function(data) {
        if (data && typeof data["status"] != "undefined" && data["status"] == 0) {
          var uri_name = angular.element(self).siblings("input[type='hidden']").attr("name");
          $scope.formdata[uri_name] = data["data"]["uri"];
          $scope.$digest();
          angular.element(".preview.uploading").removeClass("uploading");
          LoadingIconService.close();
        }
      });
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
  
  angular.element(document).ready(function () {
//    angular.element("textarea").ckeditor({
//      customConfig: window.baseurl + "/scripts/config.js"
//    });
    
    angular.element("#sidebar > .icons").click(function () {
      console.log("CLICKED ");
      var icon = $(this);
      var sideBar = $(this).parent();
      if (icon.hasClass("fadeout")) {
        icon.removeClass("fadeout");
        sideBar.animate({
          left: 0,
          "margin-left": 0
        }, 1000, "easeInQuad", function () {
          icon.fadeIn("slow");
        });
      }
      else {
        var width = sideBar.width();
        sideBar.animate({
          left: -width,
          "margin-left": - ( parseInt(width) /2 )
        }, 1000, "easeInQuad", function () {
          icon.hide().addClass("fadeout").fadeIn("slow");
        });
      }
    });
    
    angular.element(".full-box").click(function () {
      var content = angular.element("#content");
      if (content.hasClass("full-screen")) {
        content.removeAttr('style').removeClass("full-screen");
      }
      else {
        content.animate({
          width: "99.1%",
          margin: "0px 0px"
        }, 1000, function () {
          content.addClass("full-screen");
        });
      }
    });
    
    var time;
    $(".thumbnail").live("mousemove", function () {
      var self = angular.element(this);
      if (!self.hasClass("checked")) {
        if (time) {
          clearTimeout(time);
        }
        time = setTimeout(function () {
        }, 200);
        
        angular.element(" > span", self).css("display", "block");
      }
    }).live("mouseleave" ,function (event) {
      var self = angular.element(this);
      if (!self.hasClass("checked")) {
        if (time) {
          clearTimeout(time);
        }
        time = setTimeout(function () {
        }, 200);
        
        angular.element(" > span", self).css("display", "none");
      }
    });
    
    $(".thumbnail > span").live("click", function () {
      if ($(this).parent().hasClass("checked")) {
        $(this).removeAttr("style").parent().removeClass("checked");
        $(this).children("i.fa").removeClass("fa-check-square");
      }
      else {
        $(this).css({"display": "block", color: "#cb223a"}).parent().addClass("checked");
        $(this).children("i.fa").addClass("fa-check-square");
      }
    });
  });
  
  jQuery.easing.def = "easing";
  
})(jQuery);