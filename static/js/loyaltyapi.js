LoyaltyAPI = function () {
	var self = this;
	var appslug = 'https://onapp.haravan.com/loyaltyep';

	self.makeApiRequest = function(callurl, method, data, callback) {
		var dataString = "";
		if(data) dataString = JSON.stringify(data);
		$.ajax({
			type: method,
			url: callurl,
			cache: false,
			dataType: 'json',
			data: dataString,
			contentType: 'application/json; charset=UTF-8',
			success: function (data) {
				callback(data);
			},
			statusCode: {
				401: function() {
					console.log('401');
					callback();
				}
			},
			error: function (jqXHR, textStatus, errorThrown) {
				console.log(textStatus);
				if (jqXHR.status != 500) {
					console.log(jqXHR.responseText);
				}
				callback();
			}
		});
	};

	self.makeApiRequestBasicAuth = function(auth, callurl, method, data, callback) {
		var dataString = "";
		if(data) dataString = JSON.stringify(data);
		$.ajax({
			type: method,
			url: callurl,
			cache: false,
			dataType: 'json',
			data: dataString,
			contentType: 'application/json; charset=UTF-8',
			headers: {
				"Authorization": "Basic " + auth
			},
			success: function (data) {
				callback(data);
			},
			statusCode: {
				401: function() {
					console.log('401');
					callback();
				}
			},
			error: function (jqXHR, textStatus, errorThrown) {
				console.log(textStatus);
				if (jqXHR.status != 500) {
					console.log(jqXHR.responseText);
				}
				callback();
			}
		});
	};

	self.getCouponEarned = function (customer_id, callback) {
		if(Haravan.shop == ''){
			return callback();
		}else{
			var callurl = appslug + "/api/customers/pointshistory";
			var postData =  { shop : Haravan.shop, customer_id: customer_id, limit: 15, filter_type: 'coupons_earned' };
			self.makeApiRequest(callurl,'POST', postData, callback);
		}
	};

	self.getCustomerCoupons = function(customer_id, callback) {
		if(Haravan.shop == '') {
			return callback();
		} else {
			var callurl = appslug + "/api/customers/coupons";
			var postData = { shop: Haravan.shop, customer_id: customer_id, limit: 15 };
			self.makeApiRequest(callurl, 'POST', postData, callback);
		}
	};

	self.getCustomer = function (auth, customer_id, callback) {
		if(Haravan.shop == ''){
			return callback();
		}else{
			var callurl = appslug + "/api/customers/detail";
			var postData =  { shop :  Haravan.shop , customer_id : customer_id};
			self.makeApiRequestBasicAuth(auth, callurl,'POST', postData, callback);
		}
	};

	self.getCustomerByPhone = function (auth, phone, callback) {
		if(Haravan.shop == ''){
			return callback();
		}else{
			var callurl = appslug + "/api/customers/detailbyphone";
			var postData =  { shop : Haravan.shop , phone : phone};
			self.makeApiRequestBasicAuth(auth, callurl,'POST', postData, callback);
		}
	};

	self.getCollPointsProducts = function (callback) {
		if(Haravan.shop == ''){
			return callback();
		}else{
			var callurl = appslug + "/api/collpointsproducts";
			var postData =  { shop : Haravan.shop };
			self.makeApiRequest(callurl,'POST', postData, callback);
		}
	};

	self.getDiscountCode = function (auth, customer_id,online,points_product_id, callback) {
		if(Haravan.shop == ''){
			return callback();
		}else{
			var callurl = appslug + "/api/customers/points_purchases";
			var postData =  { shop : Haravan.shop , customer_id : customer_id, online: online, points_product_id : points_product_id};
			self.makeApiRequestBasicAuth(auth, callurl,'POST', postData, callback);
		}
	};

	self.getPointsHistory = function (customer_id, callback) {
		if(Haravan.shop == ''){
			return callback();
		}else{
			var callurl = appslug + "/api/customers/pointshistory";
			var postData =  { shop : Haravan.shop, customer_id: customer_id, limit: 15, filter_type: 'custpoints_history' };
			self.makeApiRequest(callurl,'POST', postData, callback);
		}
	};

	self.addShareFbPoints = function (auth, customer_id, product_id, share_fb_post_id, callback) {
		if(Haravan.shop == ''){
			return callback();
		}else{
			var callurl = appslug + "/api/customers/points_sharefb";
			var postData = {
				shop: Haravan.shop,
				customer_id: customer_id,
				product_id: product_id,
				share_fb_post_id: share_fb_post_id
			};
			self.makeApiRequestBasicAuth(auth, callurl,'POST', postData, callback);
		}
	};

	self.customerAuth = function(digest, channelCustomerId, channelKey, callback) {
		if(Haravan.shop == '') {
			return callback();
		} else {
			var callurl = appslug + "/api/customers/auth";
			var data = {
				shop: Haravan.shop,
				digest: digest,
				channelCustomerId: channelCustomerId,
				channelKey: channelKey
			};

			self.makeApiRequest(callurl, 'POST', data, callback);
		}
	};

	self.getAuthKey = function( callback ) {
		var digest = $('.sweettooth-widget').attr('data-digest');
		var channelCustomerId = $('.sweettooth-widget').attr('data-channel-customer-id');
		var channelKey = $('.sweettooth-widget').attr('data-channel-key');

		self.customerAuth(digest, channelCustomerId, channelKey, function( auth ) {
			if(!auth) {
				return callback();
			}

			var authKey = btoa(auth._id + ':' + auth.authentication_token);

			return callback(authKey);
		});
	};

};

var api = new LoyaltyAPI();
var authKey = "";

$(document).ready(function() {
	var digest = $('.sweettooth-widget').attr('data-digest');
	var channelCustomerId = $('.sweettooth-widget').attr('data-channel-customer-id');
	var channelKey = $('.sweettooth-widget').attr('data-channel-key');

	api.customerAuth(digest, channelCustomerId, channelKey, function( auth ) {
		if(!auth) {
			return;
		}

		authKey = btoa(auth._id + ':' + auth.authentication_token);
	});
});