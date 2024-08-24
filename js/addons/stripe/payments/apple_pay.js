(function (_, $) {
  _.stripe = _.stripe || {};
  _.stripe.payment = {
    id: 'apple_pay',
    name: 'Apple Pay',
    canMakePayment: function (result) {
      return result && result.applePay;
    }
  };
})(Tygh, Tygh.$);