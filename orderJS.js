var dtMenu = [{
    nama: "Capuccino",
    harga: 35000,
    status: false,
}, {
    nama: "Green Tea Latte",
    harga: 40000,
    status: false,
}, {
    nama: "Fish and Chips",
    harga: 50000,
    status: false, 
}, {
    nama: "Tuna and Sandwich",
    harga: 45000,
    status: false,
}, {
    nama: "Mineral Water",
    harga: 8000,
    status: false,
}, {
    nama: "French Fries",
    harga: 18000,
    status: false,
}]

tampilMenu();

function tampilMenu(){
    var daftarMenu = document.getElementById("daftarMenu");
    daftarMenu.innerHTML = "";

    for(let i = 0; i < dtMenu.length; i++){
        var warna = "";
        if(dtMenu[i].status){
            warna = "alert-success";
        }else{
            warna = "alert-dark";
        }
        daftarMenu.innerHTML += ` <div class="alert ${warna}" onclick="perbaruiMenu(${i});">
        <div class="row"> 
            <div class="col-md-6">${dtMenu[i].nama}</div>
            <div class="col-md-6 text-right">Rp ${dtMenu[i].harga}</div>
        </div>
        </div>`
    }
}

function perbaruiMenu(indeks){
    dtMenu[indeks].status = !dtMenu[indeks].status;
    hitungTotal();
    tampilMenu();
}

function hitungTotal(){
    var hargaTotal = 0;
    for(let i = 0; i < dtMenu.length; i++){
        if(dtMenu[i].status){
            hargaTotal += dtMenu[i].harga;
        }
    }
    document.getElementById("total").value = "Rp " + hargaTotal;
}