const carouselNode = document.getElementById('carouselExampleFade');
const triggerNodes = document.getElementsByClassName('form-control-navbar');

function removeCarousel() {
    carouselNode.classList.add('d-none');
}

function showCarousel() {
    carouselNode.classList.remove('d-none');
}

Array.from(triggerNodes).forEach(function (triggerNode) {
    triggerNode.addEventListener('click', removeCarousel);
    triggerNode.addEventListener('blur', showCarousel);
});

//--------- Dashboard Script ---------//
// show Page
const gantiFotoNode = document.getElementById("gantiFotoProduct");
const gambarNode = document.getElementById("showInputImage");

function TambahFotoProduct() {
    if (gambarNode.style.display === "none") {
        gambarNode.style.display = "block"
    } else {
        gambarNode.style.display = "none"
    }
}
function batalkanFotoProduct() {
    if (gantiFotoNode.innerHTML === "Ganti Foto Product") {
        gantiFotoNode.classList.remove('btn-primary');
        gantiFotoNode.classList.add('btn-danger');
        gantiFotoNode.innerHTML = "Batal"
    } else {
        gantiFotoNode.classList.remove('btn-danger');
        gantiFotoNode.classList.add("btn-primary");
        gantiFotoNode.innerHTML = "Ganti Foto Product";
    }
}
if (gantiFotoNode) {
    gantiFotoNode.addEventListener('click', TambahFotoProduct);
    gantiFotoNode.addEventListener('click', batalkanFotoProduct);
}

// Card Show Page
const formProductName = document.getElementById('showInputProduct');
const showCardTitle = document.getElementById('showCardTitle');
if (formProductName) {
    formProductName.addEventListener('input', () => {
        showCardTitle.innerText = formProductName.value;
    });
}


const showPriceProduct = document.getElementById('showPriceProduct');
const showCardPrice = document.getElementById('showCardPrice');

if (showCardPrice) {
    showCardPrice.addEventListener('input', function () {
        const inputVal = showCardPrice.value;
        const formattedVal = formatRupiah(inputVal);
        showPriceProduct.innerText = formattedVal;
        if (showPriceProduct.innerText === "RpNaN") {
            showPriceProduct.innerText = "Rp. Mohon Isi Harga Product";
        } else {
            showPriceProduct.innerText = formattedVal;
        }
    });

    function formatRupiah(angka) {
        const numberFormatOptions = {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0,
            maximumFractionDigits: 0
        };
        return parseFloat(angka).toLocaleString('id-ID', numberFormatOptions);
    }
}

// Card Image Preview ShowPage
const showPreviewImage = document.getElementById('showPreviewImage');
const showInputImage = document.getElementById('showInputImage');

if (showInputImage) {
    showInputImage.addEventListener('change', () => {
        const file = showInputImage.files[0];
        const objectURL = URL.createObjectURL(file);
        showPreviewImage.src = objectURL;
    });

}

//Card Image Preview CreatePage
const createImagePreview = document.getElementById('createImagePreview');
const createInputImage = document.getElementById('createInputImage');
if (createInputImage) {
    createInputImage.addEventListener('change', () => {
        console.log("berhasil");
        const file = createInputImage.files[0];
        const objectURL = URL.createObjectURL(file);
        createImagePreview.src = objectURL;
    });
}
//Card title Preview CreatePage
const createCardTitle = document.getElementById('createCardTitle');
const createInputTitle = document.getElementById('createInputTitle');

if (createInputTitle) {
    createInputTitle.addEventListener('input', () => {
        createCardTitle.innerText = createInputTitle.value;
    })
}

// Card Price Preview CreatePage
const createCardPrice = document.getElementById('createCardPrice');
const createInputPrice = document.getElementById('createInputPrice');

if (createInputPrice) {
    createInputPrice.addEventListener('input', function () {
        const inputVal = createInputPrice.value;
        const formattedVal = formatRupiah(inputVal);
        createCardPrice.innerText = formattedVal;
        if (createCardPrice.innerText === "RpNaN") {
            createCardPrice.innerText = "Rp. Mohon Isi Harga Product";
        } else {
            createCardPrice.innerText = formattedVal;
        }
    });

    function formatRupiah(angka) {
        const numberFormatOptions = {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0,
            maximumFractionDigits: 0
        };
        return parseFloat(angka).toLocaleString('id-ID', numberFormatOptions);
    }
}
