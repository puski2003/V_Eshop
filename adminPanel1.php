<?php
require "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="single-product.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Raleway:wght@300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="adminPanel.css">
    <link rel="icon" href="Resources/logo.svg">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Admin Panel</title>
</head>

<body>

    <?php include "header.php" ?>


    <div class="modal fade " id="Edit-Product-menu" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Product Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="edit-product-model">



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="AddProductSubmit()">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade " id="New-Product-menu" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Product Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-2 d-flex justify-content-center align-items-center " id="productAddbtn1">
                            <div class="">
                                <input type="file" id="product-pic-id1" class="d-none" onchange="ProductPicAdd(1);" multiple>
                                <label for="product-pic-id1" class="btn "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg></label>


                            </div>

                        </div>
                        <div class="col-2 d-flex justify-content-center align-items-center " id="productAddbtn2">

                            <div class="d-flex justify-content-center align-items-center">
                                <input type="file" id="product-pic-id2" class="d-none" onchange="ProductPicAdd(2);" multiple>
                                <label for="product-pic-id2" class="btn "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg></label>
                            </div>
                        </div>
                        <div class="col-2 d-flex justify-content-center align-items-center d-none" id="productAddCon1">
                            <div class="d-flex flex-column">
                                <button class="btn" onclick="RemovePic(1)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash3" viewBox="0 0 16 16">
                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                    </svg></button>
                                <img src="" class="productAdd" id="productAddId1">
                            </div>
                        </div>
                        <div class="col-2 d-flex justify-content-center align-items-center d-none" id="productAddCon2">
                            <div class="d-flex flex-column">
                                <button class="btn" onclick="RemovePic(2)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash3" viewBox="0 0 16 16">
                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                    </svg></button>
                                <img src="" class="productAdd" id="productAddId2">
                            </div>
                        </div>

                        <div class="col-4">
                            <input class="form-control" placeholder="Product Name" type="text" value="" id="product-add-name">
                            <div class="d-flex justify-content-center ">
                                <div class="  d-flex flex-row py-4">
                                    <label class="form-label me-2 mt-2">Price:</label>
                                    <input class="form-control " id="product-price-add" placeholder="Price" value="" type="number" style="width: 30%;">
                                    <label class="form-label mx-2 mt-2">Stock:</label>


                                    <input class="form-control " id="product-stock-add" placeholder="Stock" value="" type="number" min="1" step="1" style="width: 30%;">
                                </div>


                            </div>
                            <div class="d-flex justify-content-center ">
                                <div class="  d-flex flex-row py-4">
                                    <label class="form-label me-2 mt-2">D Fee</label>
                                    <input class="form-control " id="product-DFC" placeholder="Colombo" value="" type="number" style="width: 30%;">
                                    <label class="form-label mx-2 mt-2">D Fee</label>


                                    <input class="form-control " id="product-DFO" placeholder="Other" value="" type="number" min="1" step="1" style="width: 30%;">
                                </div>


                            </div>


                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Description" style="height:30vh" id="product-dis-add"></textarea>
                                <label>Description</label>
                            </div>


                        </div>
                        <div class="col-4">
                            <div class="d-flex justify-content-center ">
                                <div class="  d-flex flex-row py-4">
                                    <label class="form-label me-2 mt-2"> Category</label>
                                    <select class="form-control " style="width: 15vw;" id="product-cat-add">
                                        <option value="0" selected>Select Category</option>
                                        <?php
                                        $rs1 = Database::search('SELECT * FROM `category` ');
                                        $num_row1 = $rs1->num_rows;
                                        if ($num_row1 > 0) {
                                            for ($x = 0; $x < $num_row1; $x++) {
                                                $data1 = $rs1->fetch_assoc();
                                        ?>
                                                <option value="<?php echo ($data1['cat_id']) ?>"><?php echo ($data1['cat_name']) ?></option>
                                        <?php

                                            }
                                        }
                                        ?>
                                    </select>
                                    <input class="form-control d-none" style="width:15vw;" id="add-cat-dt" placeholder="Add Catergory">
                                    <button class="btn " onclick="Adding_Att('cat');" id="add-cat-icon-plus">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus " viewBox="0 0 16 16">
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                        </svg>
                                    </button>
                                    <button class="btn d-none" id="add-cat-icon-tick" onclick="Add_Att_DB('cat')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="primary" class="bi bi-check-square-fill " viewBox="0 0 16 16">
                                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" onclick="Adding_Att('cat');" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </button>
                                </div>


                            </div>
                            <div class="d-flex justify-content-center ">
                                <div class="  d-flex flex-row py-4">
                                    <label class="form-label me-2 mt-2 me-4"> Brand</label>
                                    <select class="form-control " style="width: 15vw;" id="product-brand-add">
                                        <option value="0" selected>Select Brand</option>
                                        <?php
                                        $rs3 = Database::search('SELECT * FROM `brand` ');
                                        $num_row3 = $rs3->num_rows;
                                        if ($num_row3 > 0) {
                                            for ($x = 0; $x < $num_row3; $x++) {
                                                $data3 = $rs3->fetch_assoc();
                                        ?>
                                                <option value="<?php echo ($data3['brand_id']) ?>"><?php echo ($data3['brand_name']) ?></option>
                                        <?php

                                            }
                                        }
                                        ?>
                                    </select>
                                    <input class="form-control d-none" style="width:15vw;" id="add-brand-dt" placeholder="Add Brand">
                                    <button class="btn " onclick="Adding_Att('brand');" id="add-brand-icon-plus">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus " viewBox="0 0 16 16">
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                        </svg>
                                    </button>
                                    <button class="btn d-none" id="add-brand-icon-tick" onclick="Add_Att_DB('brand')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="primary" class="bi bi-check-square-fill " viewBox="0 0 16 16">
                                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" onclick="Adding_Att('brand');" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </button>
                                </div>


                            </div>

                            <div class="d-flex justify-content-center ">
                                <div class="  d-flex flex-row py-4">
                                    <label class="form-label me-2 mt-2 me-4"> Model</label>
                                    <select class="form-control " style="width: 15vw;" id="product-mod-add">
                                        <option value="0" selected>Select Model</option>
                                        <?php
                                        $rs2 = Database::search('SELECT * FROM `model` ');
                                        $num_row2 = $rs2->num_rows;
                                        if ($num_row2 > 0) {
                                            for ($x = 0; $x < $num_row2; $x++) {
                                                $data2 = $rs2->fetch_assoc();
                                        ?>
                                                <option value="<?php echo ($data2['model_id']) ?>"><?php echo ($data2['model_name']) ?></option>
                                        <?php

                                            }
                                        }
                                        ?>
                                    </select>
                                    <input class="form-control d-none" style="width:15vw;" id="add-mod-dt" placeholder="Add Model">
                                    <button class="btn " onclick="Adding_Att('mod');" id="add-mod-icon-plus">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus " viewBox="0 0 16 16">
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                        </svg>
                                    </button>
                                    <button class="btn d-none" id="add-mod-icon-tick" onclick="Add_Att_DB('mod')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="primary" class="bi bi-check-square-fill " viewBox="0 0 16 16">
                                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" onclick="Adding_Att('mod');" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </button>

                                </div>


                            </div>
                            <div class="d-flex justify-content-center ">
                                <div class="  d-flex flex-row py-4">
                                    <label class="form-label me-2 mt-2 me-2"> Condition</label>
                                    <select class="form-control " style="width: 15vw;" id="product-con-add">
                                        <option value="0" selected>Select Condition</option>
                                        <?php
                                        $rs4 = Database::search('SELECT * FROM `condition` ');
                                        $num_row4 = $rs4->num_rows;
                                        if ($num_row4 > 0) {
                                            for ($x = 0; $x < $num_row4; $x++) {
                                                $data4 = $rs4->fetch_assoc();
                                        ?>
                                                <option value="<?php echo ($data4['condition_id']) ?>"><?php echo ($data4['condition_name']) ?></option>
                                        <?php

                                            }
                                        }
                                        ?>
                                    </select>
                                    <input class="form-control d-none" style="width:15vw;" id="add-con-dt" placeholder="Add Condition">
                                    <button class="btn " onclick="" id="add-con-icon-plus">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus " viewBox="0 0 16 16">
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                        </svg>
                                    </button>
                                    <button class="btn d-none" id="add-con-icon-tick" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="primary" class="bi bi-check-square-fill " viewBox="0 0 16 16">
                                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
                                        </svg>
                                        
                                    </button>
                                </div>


                            </div>
                            <div class="d-flex justify-content-center ">
                                <div class="  d-flex flex-row py-4 ">
                                    <label class="form-label  mt-2 me-4"> Color</label>
                                    <select class="form-control  " style="width: 15vw;" id="product-clr-add">
                                        <option value="0" selected>Select Color</option>
                                        <?php
                                        $rs4 = Database::search('SELECT * FROM `color` ');
                                        $num_row4 = $rs4->num_rows;
                                        if ($num_row4 > 0) {
                                            for ($x = 0; $x < $num_row4; $x++) {
                                                $data4 = $rs4->fetch_assoc();
                                        ?>
                                                <option value="<?php echo ($data4['clr_id']) ?>"><?php echo ($data4['clr_name']) ?></option>
                                        <?php

                                            }
                                        }
                                        ?>
                                    </select>
                                    <input class="form-control d-none" style="width:15vw;" id="add-clr-dt" placeholder="Add Color">
                                    <button class="btn " onclick="Adding_Att('clr');" id="add-clr-icon-plus">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus " viewBox="0 0 16 16">
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                        </svg>
                                    </button>
                                    <button class="btn d-none" id="add-clr-icon-tick" onclick="Add_Att_DB('clr')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="primary" class="bi bi-check-square-fill " viewBox="0 0 16 16">
                                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
                                        </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" onclick="Adding_Att('clr');" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </button>
                                </div>


                            </div>





                        </div>




                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="AddProductSubmit()">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="product_add_error" data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-content1" style="  background-color:rgba(183, 104, 104, 0.505) !important; backdrop-filter: blur(15px) !important;">
                <div class="d-flex justify-content-end px-3 pt-2">

                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="" id="response">

                    </div>
                </div>

            </div>
        </div>
    </div>

    </div>
    <div class="product-container"></div>

    <?php

$today = date("Y-m-d");
$thismonth = date("m");
$thisyear = date("Y");

$a = "0";
$b = "0";
$c = "0";
$e = "0";
$f = "0";

$invoice_rs = Database::search("SELECT * FROM `invoice`");
$invoice_num = $invoice_rs->num_rows;

for ($x = 0; $x < $invoice_num; $x++) {
    $invoice_data = $invoice_rs->fetch_assoc();

    $f = $f + $invoice_data["qty"]; //total qty

    $d = $invoice_data["date"];
    $splitDate = explode(" ", $d); //separate date from time
    $pdate = $splitDate[0]; //sold date

    if ($pdate == $today) {
        $a = $a + $invoice_data["total"];
        $c = $c + $invoice_data["qty"];
    }

    $splitMonth = explode("-", $pdate); //separate date as year,month & date
    $pyear = $splitMonth[0]; //year
    $pmonth = $splitMonth[1]; //month

    if ($pyear == $thisyear) {
        if ($pmonth == $thismonth) {
            $b = $b + $invoice_data["total"];
            $e = $e + $invoice_data["qty"];
        }
    }
}

?>

    <div class="Sproduct bodytop">
        <div class="" style="height: 100vh;">
            <div class="d-lg-flex justify-content-lg-center " style="margin: 0; padding: 0;">
                <div class="row offset-lg-1 col-lg-11 col-md-12 col-12 product-dis d-md-flex justify-content-md-center py-4" style="padding: 0;margin: 0;background: #0000001a; margin-bottom: 10vh;">
                    <div class="col-12 my-3 m-3 ms-5" style="font-family: 'Lato', sans-serif;">
                        <h3>Admin Panel</h3>

                    </div>
                    <div class="row  d-flex justify-content-between " style="font-family: 'Lato', sans-serif;">
                        <div class="col-3 sell-con d-flex justify-content-between align-items-center mx-4">
                            <div>
                                <p style="color: rgba(9, 10, 10, 0.579);">Daily Earnings</p>
                                <h2 style="color:#2491EB;" >Rs. <?php echo $a; ?> .00</h2>
                            </div>
                            <button class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet" viewBox="0 0 16 16">
                                    <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z" />
                                </svg>
                            </button>
                        </div>
                        <div class="col-3 sell-con d-flex justify-content-between align-items-center mx-4">
                            <div>
                                <p style="color: rgba(9, 10, 10, 0.579);">Today Selling</p>
                                <h2 style="color:#2491EB;" ><?php echo $c; ?> Items</h2>
                            </div>
                            <button class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet" viewBox="0 0 16 16">
                                    <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z" />
                                </svg>
                            </button>
                        </div>
                        <div class="col-3 sell-con d-flex justify-content-between align-items-center mx-4">
                            <div>
                                <p style="color: rgba(9, 10, 10, 0.579);">Monthly Earning</p>
                                <h2 style="color:#2491EB;">Rs. <?php echo $b; ?> .00</h2>
                            </div>
                            <button class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet" viewBox="0 0 16 16">
                                    <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z" />
                                </svg>
                            </button>
                        </div>
                        <div class="col-3 sell-con d-flex justify-content-between align-items-center mx-4">
                            <div>
                                <p style="color: rgba(9, 10, 10, 0.579);">Monthly Sellings</p>
                                <h2 style="color:#2491EB;"><?php echo $e; ?> Items</h2>
                            </div>
                            <button class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet" viewBox="0 0 16 16">
                                    <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z" />
                                </svg>
                            </button>
                        </div>
                        <div class="col-3 sell-con d-flex justify-content-between align-items-center mx-4">
                            <div>
                                <p style="color: rgba(9, 10, 10, 0.579);">Total Sales</p>
                                <h2 style="color:#2491EB;"><?php echo $f; ?> Items</h2>
                            </div>
                            <button class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet" viewBox="0 0 16 16">
                                    <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z" />
                                </svg>
                            </button>
                        </div>
                        <div class="col-3 sell-con d-flex justify-content-between align-items-center mx-4">
                            <div>
                                <p style="color: rgba(9, 10, 10, 0.579);">Total Engagements</p>
                                <h2 style="color:#2491EB;">No of users :<?php
                                            $user_rs = Database::search("SELECT * FROM `user`");
                                            $user_num = $user_rs->num_rows;
                                            ?>
                                          <?php echo $user_num; ?> 
                            </div>
                            <button class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet" viewBox="0 0 16 16">
                                    <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z" />
                                </svg>
                            </button>
                        </div>



                    </div>
                    <div class="d-flex justify-content-evenly">
                        <div class="col-8 Order" style="font-family: 'Lato', sans-serif;">
                            <div class="d-flex justify-content-start py-5 px-4">
                                <h5 style="color: #2491EB;">Mostly Sold Item</h5>
                            </div>
                            <?php

$freq_rs = Database::search("SELECT `product_id`,COUNT(`product_id`) AS `value_occurence` 
FROM `invoice` WHERE `date` LIKE '%" . $today . "%' GROUP BY `product_id` ORDER BY 
`value_occurence` DESC LIMIT 1");

$freq_num = $freq_rs->num_rows;
if ($freq_num > 0) {
    $freq_data = $freq_rs->fetch_assoc();

    $product_rs = Database::search("SELECT * FROM `product` WHERE `id`='" . $freq_data["product_id"] . "'");
    $product_data = $product_rs->fetch_assoc();

    $image_rs = Database::search("SELECT * FROM `images` WHERE `product_id`='" . $freq_data["product_id"] . "'");
    $image_data = $image_rs->fetch_assoc();

    $qty_rs = Database::search("SELECT SUM(`qty`) AS `qty_total` FROM `invoice` WHERE 
    `product_id`='" . $freq_data["product_id"] . "' AND `date` LIKE '%" . $today . "%'");
    $qty_data = $qty_rs->fetch_assoc();

?>
    <div class="col-12 text-center shadow">
        <img src="<?php echo $image_data["code"]; ?>" class="img-fluid rounded-top" style="height: 250px;" />
    </div>
    <div class="col-12 text-center my-3">
        <span class="fs-5 fw-bold"><?php echo $product_data["title"]; ?></span><br />
        <span class="fs-6"><?php echo $qty_data["qty_total"]; ?> items</span><br />
        <span class="fs-6">Rs. <?php echo $qty_data["qty_total"] * $product_data["price"]; ?> .00</span>
    </div>
<?php

} else {
?>
    <div class="col-6 offset-3 text-center shadow">
        <img src="resource/empty.svg" class="img-fluid rounded-top" style="height: 150px; " />
    </div>
    <div class="col-12 text-center my-3">
       
        <span class="fs-6">0 items</span><br />
        <span class="fs-6">Rs.0 .00</span>
    </div>
<?php
}

?>



                        </div>
                        <div class="col-3 Order" style="font-family:'Lato', sans-serif ;">
                            <div class="d-flex justify-content-start py-5 px-4">
                                <h5 style="color: #2491EB;">Recent Customers</h5>
                            </div>


                            <?php

            $query = "SELECT * FROM `user`";
            $pageno;

            if (isset($_GET["page"])) {
                $pageno = $_GET["page"];
            } else {
                $pageno = 1;
            }

            $user_rs = Database::search($query);
            $user_num = $user_rs->num_rows;

            $results_per_page = 20;
            $number_of_pages = ceil($user_num / $results_per_page);

            $page_results = ($pageno - 1) * $results_per_page;
            $selected_rs =  Database::search($query . " LIMIT " . $results_per_page . " OFFSET " . $page_results . "");

            $selected_num = $selected_rs->num_rows;

            for ($x = 0; $x < $selected_num; $x++) {
                $selected_data = $selected_rs->fetch_assoc();

            ?>
                
                        
                        

                        <div class="product-container-table" style="height: 40vh;">
                                <div class="row ms-4 ">
                                    <div class="col-3 prof-img"></div>
                                    <div class="col-9 pt-4"><?php echo $selected_data["fname"] . " " . $selected_data["lname"]; ?></div>
                                </div>
                                
                            </div>

                       
                        
                 
              
            <?php

            }

            ?>

         

                            

                        </div>
                    </div>
                    
                </div>

            </div>
        </div>





    </div>
    </div>



    

   
    <script src="script.js"></script>
</body>

</html>