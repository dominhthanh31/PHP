<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sản phẩm</title>
    <style>
        .container{
            width: 600px;

        }

        .input-product{
            width: 100%;
            border: 0.5px solid #5999ff;
        }

        h3{
            padding: 7px 20px;
            margin: 0;
            margin-bottom: 12px;
            background-color: #5999ff;
            color: white;
        }

        .input-product label,
        .input-product input,
        .input-product select{
            width: 90%;
            margin: 10px 20px;
            padding: 6px;
            font-size: 18px;
        }

        .input-product label{
            font-weight: bold;
            font-size: 20px;
        }

        .input-product button{
            margin: 20px;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            transition: 0.25s;
        }

        button:hover{
            transform: scale(0.9);
        }

        .manage-product{
            width: 700px;
            margin-top: 20px;
            border: 0.5px solid #5999ff;
            padding: 4px auto;
        }

        .manage-product table{
            margin: 0 auto;
        }
        
        .manage-product button{
            padding: 7px 12px;
            font-size: 14px;
            border: none;
            border-radius: 5px;
            transition: 0.25s;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="input-product">
            <h3>Input product's detail information</h3>
            <form action="" onsubmit=" return saveData()">
                <label for="manu-name_id">Manufacturer Name:</label>
                <select name="manufacturer-name" id="manu-name_id" onchange="selectManu(this)">
                    <option value="0">---Select---</option>
                    <option value="Apple">Apple</option>
                    <option value="SamSung">Sam Sung</option>
                    <option value="LG">LG</option>
                    <option value="Sony">Sony</option>
                    <option value="Google">Google</option>
                </select>
                <label for="category-name_id">Category Name:</label>
                <select name="category-name" id="category-name_id">

                </select>
                <label for="product_id">Product Name:</label>
                <input type="text" required name="product-name" id="product_id" placeholder="Enter product name">
                <label for="price_id">Unit Price:</label>
                <input type="number" required name="price" id="price_id" placeholder="0" onkeyup="sum()">
                <label for="quanity_id">Quanity:</label>
                <input type="number" required name="quanity" id="quanity_id" placeholder="0" onkeyup="sum()">
                <label for="">Total Price:</label>
                <input type="text" disabled id="totalPrice_id" placeholder="0">
                <button type="submit" style="background-color: #3dbd39;">Add Product</button>
                <button type="reset" style="background-color: #f7c859;" onclick="resetBtn()">Reset</button>
            </form>
        </div>
        <div class="manage-product">
            <h3>Management Products</h3>
            <table border="1" cellpadding="5">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Product Name</th>
                        <th>Category Name</th>
                        <th>Price</th>
                        <th>Quanity</th>
                        <th>Manufacturer Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody id="result_id">
                </tbody>
            </table>
        </div>
    </div>
</body>
<!-- <script>
	var manufacturerNameTag = document.getElementById('manu-name_id')
var categoryNameTag = document.getElementById('category-name_id')
var productNameTag = document.getElementById('product_id')
var priceTag = document.getElementById('price_id')
var quanityTag = document.getElementById('quanity_id')
var totalPriceTag = document.getElementById('totalPrice_id')
var resultTag = document.getElementById('result_id')


var apple = [
    "Iphone",
    "Ipad",
    "Ipod",
    "Apple Pencil",
    "Apple TV",
    "Apple Watch",
    "Lightning"
]

var samsung = [
    "Focus",
    "Galaxy J",
    "Galaxy S",
    "Galaxy Y", 
    "Galaxy Note", 
    "Galaxy Tab", 
    "Galaxy Ativ Tab", 
    "Galaxy Fold", 
    "Galaxy Z", 
    "Galaxy A", 
    "Galaxy J"
]
 
var LG = [
    "Refrigerator",
    "Air Conditioning",
    "Television",
    "Washing Machine",
    "Bluetooth Speaker",
    "Bluetooth Headphone"
]

var sony = [
    "Television",
    "Bluetooth Speaker",
    "Bluetooth Headphone",
    "Laptop Vaio",
    "Xperia"
]

var google = [
    "Pixel",
    "Google Home",
    "NexusQ",
    "Chromecast"
]

function checkManufacturer(manu){
    switch(manu){
        case 'Apple':{
            categoryNameTag.innerHTML = ""
            for (var i=0; i<apple.length; i++){
                categoryNameTag.innerHTML += `
                    <option value="${apple[i]}">${apple[i]}</option>
                `
            }
            break;
        }
        case 'SamSung':{
            categoryNameTag.innerHTML = ""
            for (var i=0; i<samsung.length; i++){
                categoryNameTag.innerHTML += `
                    <option value="${samsung[i]}">${samsung[i]}</option>
                `
            }
            break;
        }
        case 'LG':{
            categoryNameTag.innerHTML = ""
            for (var i=0; i<LG.length; i++){
                categoryNameTag.innerHTML += `
                    <option value="${LG[i]}">${LG[i]}</option>
                `
            }
            break;
        }
        case 'Sony':{
            categoryNameTag.innerHTML = ""
            for (var i=0; i<sony.length; i++){
                categoryNameTag.innerHTML += `
                    <option value="${sony[i]}">${sony[i]}</option>
                `
            }
            break;
        }
        case 'Google':{
            categoryNameTag.innerHTML = ""
            for (var i=0; i<google.length; i++){
                categoryNameTag.innerHTML += `
                    <option value="${google[i]}">${google[i]}</option>
                `
            }
            break;
        }
    }
}

function selectManu(card){
    var value = card.value
    if(value == '0'){
        categoryNameTag.innerHTML = ""
    }else{
        checkManufacturer(value)
    }
    productNameTag.value = ""
    priceTag.value = ""
    quanityTag.value = ""
    
}

function sum(){
    totalPriceTag.value = priceTag.value * quanityTag.value
}

var productList = []

var currentIndex = -1

function showProduct(){
    resultTag.innerHTML = ''
    for(var i = 0; i < productList.length; i++){
        resultTag.innerHTML += `<tr>
            <td>${i+1}</td>
            <td>${productList[i].productName}</td>
            <td>${productList[i].categoryName}</td>
            <td>${productList[i].price}</td>
            <td>${productList[i].quanity}</td>
            <td>${productList[i].manufacturerName}</td>
            <td><button onclick="editBtn(${i})" style="background-color: rgb(92, 204, 92);">Edit</button></td>
            <td><button onclick="deleteBtn(${i})" style="background-color: rgb(230, 163, 39);">Delete</button></td>
        </tr>`
    }
}



function saveData(){
    var product = {
        "manufacturerName": manufacturerNameTag.value,
        "categoryName": categoryNameTag.value,
        "productName": productNameTag.value,
        "price": priceTag.value,
        "quanity": quanityTag.value
    }

    if(currentIndex >= 0){
        productList[currentIndex] = product
        currentIndex = -1
    }else{
        productList.push(product)
    }

    showProduct()
    return false
}

function editBtn(index){
    currentIndex = index
    manufacturerNameTag.value = productList[index].manufacturerName
    checkManufacturer(manufacturerNameTag.value)
    categoryNameTag.value = productList[index].categoryName
    productNameTag.value = productList[index].productName
    priceTag.value = productList[index].price
    quanityTag.value = productList[index].quanity
}

function deleteBtn(index){
    Option = confirm('Are you sure to remove the product?')
    if(!Option) return

    productList.splice(index, 1)
    showProduct();
}

function resetBtn(){
    categoryNameTag.innerHTML = ""
    currentIndex = -1
}
</script> -->
</html>