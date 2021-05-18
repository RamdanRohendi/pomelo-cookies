if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
    var removeCartItemButtons = document.getElementsByClassName('btn-danger')
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }

    var addToCartButtons = document.getElementsByClassName('shop-item-button')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }

    document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked)
}


function purchaseClicked() {
    if (getDataCart().length < 1) {
        alert("Silahkan pilih barang yang ingin anda beli terlebih dahulu !!!")
        return
    }
    var totalPrice = document.getElementsByClassName('cart-total-price')[0].innerText
    var data = getDataCart()

    add(data, totalPrice)

    window.location.assign("/cart/order-tracking");
}

function removeCartItem(event) {
    var buttonClicked = event.target
    var id = buttonClicked.parentElement.parentElement.getElementsByClassName('cart-item-no')[0].innerText
    var allData = getDataCart()
    allData = allData.filter(item => item.id != id)
    localStorage.setItem("cart", JSON.stringify(allData))

    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
}

function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }

    var id = input.parentElement.parentElement.getElementsByClassName('cart-item-no')[0].innerText
    var allData = getDataCart()
    for (var i = 0; i < allData.length; i++) {
        if (allData[i].id == id) {
            var data = allData[i]
            data.quantity = input.value
            localStorage.setItem("cart", JSON.stringify(allData))
        }
    }

    updateCartTotal()
}

function addToCartClicked(event) {
    var button = event.target
    var shopItem = button.parentElement.parentElement
    var title = shopItem.getElementsByClassName('shop-item-title')[0].innerText
    var price = shopItem.getElementsByClassName('shop-item-price')[0].innerText
    var imageSrc = shopItem.getElementsByClassName('shop-item-image')[0].src
    addItemToCart(title, price, imageSrc)
    updateCartTotal()
}

function addItemToCart(title, price, imageSrc) {
    var id = getidbrg()
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
            alert('This item is already added to the cart')
            return
        }
    }
    var cartRowContents = `
        <div class="cart-item cart-column">
            <p class="cart-item-no" style="margin-right: 5px; position: fixed; color: transparent">${id}</p>
            <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
            <span class="cart-item-title">${title}</span>
        </div>
        <span class="cart-price cart-column">${price}</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="1">
            <button class="btn btn-danger" type="button">REMOVE</button>
        </div>`
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)

    addCart(id, title, price, 1)
}

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('Rp.', ''))
        var quantity = quantityElement.value
        total = total + (price * quantity)
    }
    total = Math.round(total * 100) / 100
    document.getElementsByClassName('cart-total-price')[0].innerText = 'Rp.' + total + '.000'
}

function uuidv4() {
  return 'xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
    var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
    return v.toString(16);
  });
}

function getidbrg() {
  return 'item-xxxxx'.replace(/[xy]/g, function(c) {
    var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
    return v.toString(16);
  });
}

function getDataCart() {
    var tbCart = localStorage.getItem("cart");
    tbCart = JSON.parse(tbCart);
    if(tbCart == null || tbCart == undefined)
        tbCart = [];

    return tbCart
}

function getTanggal() {
    arrbulan = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
    date = new Date();
    tanggal = date.getDate();
    bulan = date.getMonth();
    tahun = date.getFullYear();

    return tanggal + " " + arrbulan[bulan] + " " + tahun;
}

function add(item, totalPrice) {
    var noOrder = uuidv4()
    var date = getTanggal()

    var data = {
        date: date,
        no_order: noOrder,
        items: item,
        total_price: totalPrice,
        track: 'order',
    }

    localStorage.setItem("struk", JSON.stringify(data))
}

function addCart(id, name, price, quantity) {
    var allData = getDataCart()
    var data = {
        id: id,
        name: name,
        price: price,
        quantity: quantity,
    }
    allData.push(data)
    localStorage.setItem("cart", JSON.stringify(allData))
}