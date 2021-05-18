if (getDataStruk().items < 1 || getDataStruk() == null || getDataStruk() == undefined) {
	window.location.assign("/cart");
}

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
	var data = getDataStruk()
	var track = data.track
	var items = data.items

	document.getElementById("details-date").innerText = data.date
	document.getElementById("details-kode").innerText = data.no_order
	document.getElementById("details-bayar").innerText = data.total_price

	showTracking(track)
	showItems(items)
}

function getDataStruk() {
    var tbStruk = localStorage.getItem("struk");
    tbStruk = JSON.parse(tbStruk);
    if(tbStruk == null || tbStruk == undefined)
        tbStruk = [];

    return tbStruk
}

function showItems(items) {
	var templateList = document.getElementsByClassName('pricing')[0]

	for (var i = 0; i < items.length; i++) {
		var itemsRow = document.createElement('div')
		var templateItems = `
			<div class="row">
	      <div class="col-9" style="font-weight: bold;">- <span id="name">${items[i].name}</span> (x${items[i].quantity}) </div>
	      <div class="col-3"> <span id="price">${items[i].price}</span> <small>(harga satuan)</small> </div>
	      <div class="col-3" style="border-bottom:1px solid"> Rp. <span id="priceTotal">${totalPerItem(items[i].price, items[i].quantity)}</span> <small>(harga total)</small> </div>
	    </div>
		`
		itemsRow.innerHTML = templateItems
		templateList.append(itemsRow)
	}
}

function showTracking(track) {
	if (track == "order") {
		document.getElementById("step1").classList.add('active')
	} else if (track == "ship") {
		document.getElementById("step1").classList.add('active')
		document.getElementById("step2").classList.add('active')
	} else if (track == "otw") {
		document.getElementById("step1").classList.add('active')
		document.getElementById("step2").classList.add('active')
		document.getElementById("step3").classList.add('active')
	} else if (track == "deliver") {
		document.getElementById("step1").classList.add('active')
		document.getElementById("step2").classList.add('active')
		document.getElementById("step3").classList.add('active')
		document.getElementById("step4").classList.add('active')
	}
}

function totalPerItem(hargaSatuan, jmlBeli) {
	hargaSatuan = hargaSatuan.replace("Rp. ", "")
	hargaSatuan = hargaSatuan.replace(".", "")
	return hargaSatuan * jmlBeli
}
