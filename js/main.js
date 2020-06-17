var $productTitle = $('[data-productTitle]')
var $price = $('[data-price]')
var $currency = $('[data-currency]')
var $smallPicture = $('[data-smallPicture]')
var $availSize = $('[data-availSize]')
var $sleevType = $('[data-sleevType]')
var $brand = $('[data-brand]')
var $descreption = $('[data-descreption]')
var $thumb1 = $('[data-thumb1]')
var $thumb2 = $('[data-thumb2]')
var $thumb3 = $('[data-thumb3]')
var $thumb4 = $('[data-thumb4]')

var $btnsWrapper = $('[data-buttons]')

var render = function(currentProduct) {
  $productTitle.text(currentProduct.productTitle)
  $price.text(currentProduct.price)
  $currency.text(currentProduct.currency)
  $availSize.text(currentProduct.availSize)
  $sleevType.text(currentProduct.sleevType)
  $brand.text(currentProduct.brand)
  $descreption.text(currentProduct.descreption)
  $smallPicture.attr("src",currentProduct.smallPicture);
  $thumb1.attr("src",currentProduct.thumb1);
  $thumb2.attr("src",currentProduct.thumb2);
  $thumb3.attr("src",currentProduct.thumb3);
  $thumb4.attr("src",currentProduct.thumb4);
}

$.ajax('./js/data.json').done(function(result) {
  var products = result

  var btnsHTML = products.map(function(product, index) {
    var isFirst = index === 0
    return '<button class="' + product.color + (isFirst ? ' active' : '') + '" data-index="' + index + '"></button>'
  }).join('')

  var $btns = $(btnsHTML)

  $btnsWrapper.append($btns)

  $btns.click(function(event) {
    $btns.removeClass('active');
    $(this).addClass('active');

    var indexToShow = $(this).data('index');
    var currentProduct = products[indexToShow]

    render(currentProduct)
  });
})
