<!DOCTYPE html>
<html lang="en-AU"  data-menu="leftalign">
   <head>
      <title>TOROD</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <link rel="shortcut icon" href="image/fav.png" type="image/png" id="favicon" />
      <link rel="apple-touch-icon" href="image/fav.png" />
      <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <!-- <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css"> -->
      <!-- <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css"> -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="css/animate.css">
      <link rel="stylesheet" type="text/css" href="css/style-en.css">
       <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <!--   <style type="text/css">
         #loading {
         position: fixed;
         left: 0px;
         top: 0px;
         width: 100%;
         height: 100%;
         z-index: 9999;
         background: url(image/preloader.gif) 50% 50% no-repeat #ffff;
         }
      </style> -->
   </head>
   <body>

    <div class="dashboard_header"> 
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <a href="#" class="logo_dashboard"><img src="image/logo.png" alt="LOGO" width="150"></a>
            <a class="logo_dashboardmob" href=""> <img alt="Shippo" src="image/icon-logo.png" class="dark-logo"></a>
                       <div id="clickmobmenu1">
  <span><i class="fa fa-bars" aria-hidden="true"></i></span>
</div>
             <a href="javascript:;" id="admin_mob" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <img src="image/user_icon.png" alt=""> User
                
              </a>
                  <div class="user_acc mobuser_acc" style="display: none;">
<ul class="css-12eett4"><li><a href="#">My profile</a></li>
  <li ><a href="https://torod.co/"><i class="fa fa-power-off fa-lg"></i><span> Logout</span></a></li>
</ul>
              </div>
        <div id="useracc_backg"></div>
             <a href="#" class="lang_menu mob_lan">العربية </a>
 <a class="css-createlabel mob_createla" data-pendo="orders-create-order" data-e2e="create-label" href="create-label.php"><i class="fa fa-edit"></i> Create Shipment</a>
          </div>

          <div class="col-md-9">
            <ul class="navbara-right">
                <li>
                  <a class="css-createlabel" data-pendo="orders-create-order" data-e2e="create-label" href="create-label.php"><i class="fa fa-edit"></i> Create Shipment</a>
              </li>
               <li><a href="#" class="lang_menu">العربية </a></li>
              <li><a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i></a></li>
            <li class="">
              <a href="javascript:;" class="user-profile dropdown-toggle">
                <img src="image/user_icon.png" alt=""> User
                <!-- <span><i  class=" fa fa-angle-down"></i> </span> -->
              </a>

              <div class="user_acc" style="display: none;">
<ul class="css-12eett4"><li><a href="#">My profile</a></li>
  <li ><a href="https://torod.co/"><i class="fa fa-power-off fa-lg"></i><span> Logout</span></a></li>
</ul>
              </div>
        <div id="useracc_backg"></div>
             
            </li>

            
          </ul>
          </div>
        </div>
      </div>
    </div>

      <div class="container-fluid mar_topmob">
          <div class="menu_dashboard">
           <div class="box_menudashboard">
              <ul class="menu_uldash">
               <li><a href="dashboard.php"><img src="image/dashboard_icon01.png"> <span>Dashboard</span></a></li>
               <li class="active"><a href="dashboard-orders.php"><img src="image/dashboard_icon02.png"> <span>Orders</span></a></li>
               <li><a href="list-orders.php"><img src="image/dashboard_icon04.png"> <span>Shipments</span></a></li>
               <li><a href="customers.php"><img src="image/dashboard_icon05.png"> <span>Customers</span></a></li>
              
               <li> <a href="return-page.php"><img src="image/dashboard_icon03.png"><span>Returns</span></a></li>
               <li> <a href="tracking-page.php"><img src="image/dashboard_icon12.png"><span>Tracking</span></a></li>
                <li class="menu-item-has-children parent">
                  <a href="#" class="level-top"> <img src="image/dashboard_icon07.png"> <span>Settings</span></a>
                  <div class="sub_menudash" style="display: none;">
                     <div class="head_cssdash"><i class="fa fa-angle-left" aria-hidden="true"></i> Settings</div>
                      <ul class="menu_uldash">
                       <div class="sub_menu2">
                        
                        <h5 class="head_2menu"> <img src="image/dashboard_icon13.png"> My Account</h5>
                          <ul>
                          <li> <a href="profile.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Profile </a> </li>
                        <li> <a href="myaccount-plan.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Plan </a></li>
                        <li> <a href="wallet.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Wallet </a></li>
                         <li> <a href="billing.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Billing & Invoices </a></li>
                           <li><a href="branding.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Company \ Brand </a></li>
                            <li> <a href="team.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Team </a></li>
                              <li> <a href="addresses.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Address </a></li>
                            </ul>
                      </div>
                     

                      <div class="sub_menu2">
                        <h5 class="head_2menu"><img src="image/dashboard_icon14.png"> Integration</h5>
                        <ul>
                            <li> <a href="all-store.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Connect store</a> </li>
                        <li> <a href="carriers.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Carriers </a></li>
                        <li> <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> API  </a></li>
                        </ul>
                      </div>

                       <div class="sub_menu2">
                         <h5 class="head_2menu"><img src="image/dashboard_icon15.png"> Configuration</h5>
                        <ul>  <li> <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>  Labels</a> </li>
                        <li> <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Package </a></li>
                        <li> <a href="#"> <i class="fa fa-angle-right" aria-hidden="true"></i> Notification </a></li>
                         <li> <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>  Automation </a></li></ul>
                      </div>

                         <li>
                          <a href="#">  </a>
                        </li>
                     </ul>
                  </div>
               </li>
               <li><a href="#"><img src="image/dashboard_icon09.png"> Support</a></li>
            </ul>
            <footer class="css-1esnxoi">
               <article><a href="https://torod.co/" class="css-1wwqr0i"><i class="fa fa-power-off fa-lg"></i><span> Logout</span></a></article>
            </footer>
           </div>
         </div>
            <div id="black_hidemenu"></div>


      

                   <div class="row mar_leftcss">
                     <div class="col-md-12">
                      <div class="card_css">
                      <div>
                        <h3 class="head_title">Orders</h3>
                        <div class="css-1lqgplr">
                          <div class="css-1e6pzoo">
                            <button type="button" class="css-1m9rtzs" data-pendo="orders-sync-orders" data-e2e="orders-sync-orders-btn"><i class="fa fa-refresh css-2dse8b"></i> Sync Orders</button>
                            <a class="css-wfa5kj" data-pendo="orders-import-csv" href="csv-import.php"><i class="fa fa-upload" aria-hidden="true"></i> Upload CSV</a>
                               <a class="css-1yhmw5v" data-pendo="orders-create-order" data-e2e="create-label" href="create-order.php"><i class="fa fa-plus-square-o"></i> Create Order</a>
                          
                          </div>
                        </div>
                      </div>
                    </div>
                     </div>
                      </div>

                      <div class="row mar_leftcss">
                     <div class="col-md-12">
                      <div class="card_css">
                     
<div class="css-9ww4nf">
  <div class="css-9s9ecg">
    <div class="css-1mmu128">
      <div tabindex="0" class="css-rahyx8 active">All</div>
      <div tabindex="0" class="css-ujda04">Unfulfilled</div>
      <div tabindex="0" class="css-ujda04">Fulfilled</div>
    </div>
    <div class="css-xw0iqe">
      <div class="css-ov1ktg">
        <button data-pendo="orders-filters-menu" data-shippo-feature="" id="orders-filters-menu" class="css-1o32mk4"><i class="fa fa-search css-1fc8vz0"></i>Filters</button>
        <div class="w-full css-7zhfhb">
          <div class="css-uf1ume"></div>
          <div class="css-617l73">
            <input placeholder="Search for..." class="css-1fo3h60" id="orders-search" data-pendo="orders-search" value="">
          </div>
        </div>

      </div>

      <div class="css-vmxz80" style="display: none;">
        <div class="css-rioki0"><div><h3 class="css-1cbfb14">ADD FILTER</h3><ul class="css-12eett4"><li class="css-117n4ye"><div data-pendo="orders-filters-date" class="css-1q43t41">Date</div></li><li class="css-117n4ye"><div data-pendo="orders-filters-destination" class="css-1q43t41">Destination</div></li><li class="css-117n4ye"><div data-pendo="orders-filters-weight" class="css-1q43t41">Weight</div></li><li class="css-117n4ye"><div data-pendo="orders-filters-shop" class="css-1q43t41">Shops</div></li><li class="css-117n4ye"><div data-pendo="orders-filters-method" class="css-1q43t41">Customer Shipping Method</div></li></ul></div></div></div>
        <div id="filter_backg"></div>
     
    </div>
   
  </div>
  <section class="css-9s9ecg"></section>
 <div class="table_mobil">
    <table class="css-hn7awi">
    <thead class="css-1oteowz">
      <tr class="css-167f5cr">
         <th class="css-hohthm" style="width: 20px;">
          <input type="checkbox" name="">
         </th>
          <th class="css-hohthm" style="width:20px;">
         
        </th>
        <th class="css-hohthm" style="width: 90px;">
          <div class="css-ov1ktg">Order Date
          </div>
        </th>
          <th class="css-hohthm" style="width: 70px;">Order ID</th>
        <th class="css-hohthm" style="width: 140px;">Customer Details</th>
      
        <th class="css-hohthm" style="width: 115px;">Product Details</th>
        <th class="css-hohthm" style="width: 80px;">Payment</th>
         <th class="css-hohthm" style="width: 140px;">Pickup Address</th>
           <th class="css-hohthm" style="width: 130px;">Dimension & Weight</th>
             <th class="css-hohthm" style="width: 110px;">Action</th>
      </tr>
    </thead>
    <tbody class="css-1oteowz">
      <tr class="css-167f5cr">
        <td class="css-hohthm"> <input type="checkbox" name="" style="margin-top: 5px;"></td>
        <td><img src="image/magento-icon.png" style="width: 100%;padding-right: 2px;"></td>
        <td class="css-hohthm">
          <div class="css-ov1ktg">25 Apr 2021 02:48 PM
          </div>
        </td>
         <td class="css-hohthm">#0001</td>
        <td class="css-hohthm"><div style="width: 126px;" class="customerdetails readmore processing-order-table-custdetails">
                                   

                                    <span class="ng-binding">
                                       Customer name
                                    </span>
                                    <br>
                                    <span tooltip-placement="left" uib-tooltip="vidhul.magento@gmail.com" class="ng-binding">customer@gmail.com</span>
                                    <br>
                                    <a  class="ng-binding ng-scope" href="">9895734058</a>
                                 </div>
                               </td>
       
        <td class="css-hohthm"><div class="order-product" style="width: 126px;">
                                    <span tooltip-placement="left" uib-tooltip="pendrive" class="ng-binding">
                                       Name: pendrive
                                    </span>
                                    <br>
                                    <span class="ng-binding">SKU: 123456</span>
                                    <br>
                                    <span class="ng-binding">Qty: 1</span>
                                
                                 </div></td>
        <td class="css-hohthm"> 100 <span class="payment_span">COD</span></td>

         <td class="css-hohthm"><div style="width: 126px;" class="customerdetails readmore processing-order-table-custdetails">
                                   

                                    <span class="ng-binding">
                                        Name
                                    </span>
                                    <br>
                                    <span tooltip-placement="left" uib-tooltip="vidhul.magento@gmail.com" class="ng-binding">customer@gmail.com</span>
                                    <br>
                                    <a  class="ng-binding ng-scope" href="">9895734058</a>
                                 </div>
                               </td>
                               <td class="css-hohthm" class="pack_td"><div class="ng-binding">
                                            
                                             <br>Volumetric:&nbsp;
                                             <strong class="ng-binding">0.025 Kg</strong>
                                          </div>
                                          <div class="edit_packagebtn">
                                            <a href="javascript:void(0)" class="web_showing"><i class="fa fa-edit"></i> Edit Package </a>
                                            <a href="javascript:void(0)" class="mob_showing"><i class="fa fa-edit"></i> Edit Package </a>

                                            <div class="edit_packagebox web-edit_packagebox" style="display: none;">
                                          <div class="top_headpack">
                                             <h6>Package Info</h6>
                                           <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal">Add Package </a>
                                          </div>

                                         
   <div class="css-dropdimen" >
      <button size="375" type="button" class="css-buttonpack" tabindex="1">
         <div class="css-textbtn">
            <div class="css-textbtnspan">Custom Dimensions</div>
         </div>
         <span class="css-spanarrow"><i class="fa fa-chevron-down"></i></span>
      </button>

<div class="drop_downselectdi" style="display: none;">
<div class="drop_downselectdi01">
  <section class="section_drop">
    <div class="smalltext_hr">New package</div>
    <ul class="css-ullist">
      <li class="css-ullistli">
      <div class="css-divli">
        <div>
          Enter Custom Dimensions</div>
          <div class="css-q2mmh9"></div>
        </div>
      </li>
</ul>

 <div class="smalltext_hr">Choose from package  <span class="add_packgesmall" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i>  Add New </span></div>
    <ul class="css-ullist">
      <li class="css-ullistli">
      <div class="css-divli">
        <div>
         Package 1
         </div>
        </div>
      </li>
      <li class="css-ullistli">
      <div class="css-divli">
        <div>
         Package 2
         </div>
        </div>
      </li>
</ul>
  </section>
</div>
</div>

   </div>


<div>
   <div class="css-textseconhead">Dimensions</div>
   <div class="css-box01">
      <div class="css-boxa01">
         <div class="css-lentext">L</div>
         <input tabindex="1" type="text" data-e2e="parcel-form-customdims-length" class="css-inputpack" value="">
      </div>
      <div class="css-inthu">X</div>
      <div class="css-boxa01">
         <div class="css-lentext">W</div>
         <input tabindex="1" type="text" data-e2e="parcel-form-customdims-width" class="css-inputpack" value="">
      </div>
      <div class="css-inthu">X</div>
      <div class="css-boxa01">
         <div class="css-lentext">H</div>
         <input tabindex="1" type="text" data-e2e="parcel-form-customdims-height" class="css-inputpack" value="">
      </div>
      <div class="css-boxa02">
         <select>
           <option>cm</option>
           <option>in</option>
           <option>mm</option>
         </select>
       
      </div>
   </div>
   <div class="css-zhwgfk">Enter dimensions of package</div>
</div>
<div>
   <div class="css-textseconhead">Package Weight</div>
   <div class="css-box01">
      <div class="css-boxa01">
         <input tabindex="1" type="text" class="css-inputpack" value="0.025">
      </div>
      
      <div class="css-boxa02">
         <select>
           <option>g</option>
           <option>kg</option>
           <option>oz</option>
            <option>lb</option>
         </select>
      </div>
      <div class="check_useitme">
        <input type="checkbox" name="" id="inlinecheck"> <label class="form-check-label" for="inlinecheck">Use weight of items</label>
      </div>
   </div>
   <div class="css-zhwgfk">Includes packaging</div>
</div>

<div class="box_footersec">
  <button class="cancel_btnpack">Cancel</button>
  <button class="save_btnpack">Save</button>
</div>



                                            </div>
                                          </div>

                                        </td>
                                           <td class="css-hohthm">
                                            <a href="#" class="btn_shipnow"> Ship Now</a>
                                            <a href="#" class="create_invoice">Create Invoice</a>
                                           </td>
      </tr>

       <tr class="css-167f5cr">
        <td class="css-hohthm"> <input type="checkbox" name="" style="margin-top: 5px;"></td>
        <td><img src="image/magento-icon.png" style="width: 100%;padding-right: 2px;"></td>
        <td class="css-hohthm">
          <div class="css-ov1ktg">24 Apr 2021 02:00 PM
          </div>
        </td>
         <td class="css-hohthm">#0002</td>
        <td class="css-hohthm"><div style="width: 126px;" class="customerdetails readmore processing-order-table-custdetails">
                                   

                                    <span class="ng-binding">
                                       Customer name
                                    </span>
                                    <br>
                                    <span tooltip-placement="left" uib-tooltip="vidhul.magento@gmail.com" class="ng-binding">customer@gmail.com</span>
                                    <br>
                                    <a  class="ng-binding ng-scope" href="">9895734058</a>
                                 </div>
                               </td>
       
        <td class="css-hohthm"><div class="order-product" style="width: 126px;">
                                    <span tooltip-placement="left" uib-tooltip="pendrive" class="ng-binding">
                                       Name: pendrive
                                    </span>
                                    <br>
                                    <span class="ng-binding">SKU: 123456</span>
                                    <br>
                                    <span class="ng-binding">Qty: 1</span>
                                
                                 </div></td>
        <td class="css-hohthm"> 100 <span class="payment_span">COD</span></td>

         <td class="css-hohthm"><div style="width: 126px;" class="customerdetails readmore processing-order-table-custdetails">
                                   

                                    <span class="ng-binding">
                                        Name
                                    </span>
                                    <br>
                                    <span tooltip-placement="left" uib-tooltip="vidhul.magento@gmail.com" class="ng-binding">customer@gmail.com</span>
                                    <br>
                                    <a  class="ng-binding ng-scope" href="">9895734058</a>
                                 </div>
                               </td>
                               <td class="css-hohthm"><div class="ng-binding">
                                           Volumetric:&nbsp;
                                             <strong class="ng-binding">0.025 Kg</strong>
                                          </div>
                                           <div class="edit_packagebtn">
                                           <a href="javascript:void(0)" class="web_showing"><i class="fa fa-edit"></i> Edit Package </a>
                                            <a href="javascript:void(0)" class="mob_showing"><i class="fa fa-edit"></i> Edit Package </a>

                                            <div class="edit_packagebox web-edit_packagebox" style="display: none;">
                                          <div class="top_headpack">
                                             <h6>Package Info</h6>
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal">Add Package </a>
                                          </div>

                                         
  <div class="css-dropdimen" >
      <button size="375" type="button" class="css-buttonpack" tabindex="1">
         <div class="css-textbtn">
            <div class="css-textbtnspan">Custom Dimensions</div>
         </div>
         <span class="css-spanarrow"><i class="fa fa-chevron-down"></i></span>
      </button>

<div class="drop_downselectdi" style="display: none;">
<div class="drop_downselectdi01">
  <section class="section_drop">
    <div class="smalltext_hr">New package</div>
    <ul class="css-ullist">
      <li class="css-ullistli">
      <div class="css-divli">
        <div>
          Enter Custom Dimensions</div>
          <div class="css-q2mmh9"></div>
        </div>
      </li>
</ul>

 <div class="smalltext_hr">Choose from package  <span class="add_packgesmall" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i>  Add New </span></div>
    <ul class="css-ullist">
      <li class="css-ullistli">
      <div class="css-divli">
        <div>
         Package 1
         </div>
        </div>
      </li>
      <li class="css-ullistli">
      <div class="css-divli">
        <div>
         Package 2
         </div>
        </div>
      </li>
</ul>
  </section>
</div>
</div>

   </div>


<div>
   <div class="css-textseconhead">Dimensions</div>
   <div class="css-box01">
      <div class="css-boxa01">
         <div class="css-lentext">L</div>
         <input tabindex="1" type="text" data-e2e="parcel-form-customdims-length" class="css-inputpack" value="">
      </div>
      <div class="css-inthu">X</div>
      <div class="css-boxa01">
         <div class="css-lentext">W</div>
         <input tabindex="1" type="text" data-e2e="parcel-form-customdims-width" class="css-inputpack" value="">
      </div>
      <div class="css-inthu">X</div>
      <div class="css-boxa01">
         <div class="css-lentext">H</div>
         <input tabindex="1" type="text" data-e2e="parcel-form-customdims-height" class="css-inputpack" value="">
      </div>
      <div class="css-boxa02">
         <select>
           <option>cm</option>
           <option>in</option>
           <option>mm</option>
         </select>
       
      </div>
   </div>
   <div class="css-zhwgfk">Enter dimensions of package</div>
</div>
<div>
   <div class="css-textseconhead">Package Weight</div>
   <div class="css-box01">
      <div class="css-boxa01">
         <input tabindex="1" type="text" class="css-inputpack" value="0.025">
      </div>
      
      <div class="css-boxa02">
         <select>
           <option>g</option>
           <option>kg</option>
           <option>oz</option>
            <option>lb</option>
         </select>
      </div>
      <div class="check_useitme">
        <input type="checkbox" name="" id="inlinecheck"> <label class="form-check-label" for="inlinecheck">Use weight of items</label>
      </div>
   </div>
   <div class="css-zhwgfk">Includes packaging</div>
</div>

<div class="box_footersec">
  <button class="cancel_btnpack">Cancel</button>
  <button class="save_btnpack">Save</button>
</div>



                                            </div>
                                          </div>
                                        </td>
                                           <td class="css-hohthm">
                                            <a href="#" class="btn_shipnow"> Ship Now</a>
                                            <a href="#" class="create_invoice">Create Invoice</a>
                                           </td>
      </tr>
    
    </tbody>
  </table>
 </div>
  <div>


    
  
    
  </div>
</div>



                    </div>
                     </div>
                      </div>

                       <div class="row mar_leftcss crate_orderby">
                          <div class="col-md-12">
                      <div class="card_css">
                        <h5 class="title_h5">CREATE ORDER BY</h5>

                      <div class="card card-body">
                          <p class="p_new"><b>Connect Your Store</b></p>
                        <p class="p_new">Select your store's e-commerce platform to connect and import orders</p>

                        <div class="logo_boxs">
                          <div class="boxs_logo">
                            <a href="#">
                              <img src="image/logo-left01.jpg">
                            </a>
                          </div>
                           <div class="boxs_logo">
                           <a href="#">
                              <img src="image/logo-left02.jpg">
                           </a>
                          </div>
                           <div class="boxs_logo">
                           <a href="#">
                              <img src="image/logo-left03.jpg">
                           </a>
                          </div>
                           <div class="boxs_logo">
                         <a href="#">
                              <img src="image/logo-left04.jpg">
                         </a>
                          </div>
                           <div class="boxs_logo">
                         <a href="#">
                              <img src="image/logo-left05.jpg">
                         </a>
                          </div>
                          
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                            <div class="card card-body">

                              <div class="css-vcc"><div class="css-vcc2"><h3 class="">Bulk Upload</h3>
                                <p class="css-vcc3">Upload multiple customers' orders in a single CSV file</p><a class="css-vcc4" href=""><i class="fa fa-upload" aria-hidden="true"></i> Upload CSV</a></div></div>


                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-body"> 
                              <div class="css-vcc"><div class="css-vcc2"><h3 class="">Manual Entry</h3>
                                <p class="css-vcc3">Create one shipping label by manually entering details</p><a class="css-vcc5" href=""><i class="fa fa-edit"></i> Create shipment</a></div></div>
                            </div>
                        </div>
                      </div>



                      </div>
                    </div>



                       </div>
            </div>


        
      </div>


     <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Package</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <div class="css-dropdimen" >
      <button size="375" type="button" class="css-buttonpack" tabindex="1">
         <div class="css-textbtn">
            <div class="css-textbtnspan">Custom Dimensions</div>
         </div>
         <span class="css-spanarrow"><i class="fa fa-chevron-down"></i></span>
      </button>

<div class="drop_downselectdi" style="display: none;">
<div class="drop_downselectdi01">
  <section class="section_drop">
    <div class="smalltext_hr">New package</div>
    <ul class="css-ullist">
      <li class="css-ullistli">
      <div class="css-divli">
        <div>
          Enter Custom Dimensions</div>
          <div class="css-q2mmh9"></div>
        </div>
      </li>
</ul>


   
  </section>
</div>
</div>

   </div>


<div>
   <div class="css-textseconhead">Dimensions</div>
   <div class="css-box01">
      <div class="css-boxa01">
         <div class="css-lentext">L</div>
         <input tabindex="1" type="text" data-e2e="parcel-form-customdims-length" class="css-inputpack" value="">
      </div>
      <div class="css-inthu">X</div>
      <div class="css-boxa01">
         <div class="css-lentext">W</div>
         <input tabindex="1" type="text" data-e2e="parcel-form-customdims-width" class="css-inputpack" value="">
      </div>
      <div class="css-inthu">X</div>
      <div class="css-boxa01">
         <div class="css-lentext">H</div>
         <input tabindex="1" type="text" data-e2e="parcel-form-customdims-height" class="css-inputpack" value="">
      </div>
      <div class="css-boxa02">
         <select>
           <option>cm</option>
           <option>in</option>
           <option>mm</option>
         </select>
       
      </div>
   </div>
   <div class="css-zhwgfk">Enter dimensions of package</div>
</div>
<div>
   <div class="css-textseconhead">Package Weight</div>
   <div class="css-box01">
      <div class="css-boxa01">
         <input tabindex="1" type="text" class="css-inputpack" value="0.025">
      </div>
      
      <div class="css-boxa02">
         <select>
           <option>g</option>
           <option>kg</option>
           <option>oz</option>
            <option>lb</option>
         </select>
      </div>
      <div class="check_useitme">
        <input type="checkbox" name="" id="inlinecheck"> <label class="form-check-label" for="inlinecheck">Use weight of items</label>
      </div>
   </div>
   <div class="css-zhwgfk">Includes packaging</div>
</div>
<div>

   <div class="css-textseconhead">Your Package Name</div>

   <div class="input_popuppack">
     <input type="text" name="pname" placeholder="Enter Package Name">
   </div>
    <div class="check_useitme">
        <input type="checkbox" name="" id="inlinecheck1"> <label class="form-check-label" for="inlinecheck1">Set as default package template for label purchase</label>
      </div>
   </div>

<div class="box_footersec">
  <button class="cancel_btnpack1" data-dismiss="modal">Cancel</button>
  <button class="save_btnpack1">Save</button>
</div>
       </div>
  
   
    </div>
  </div>
</div>



<!-- ************ mob****************** -->


   <div class="edit_packagebox mob-edit_packagebox" style="display: none;">
                                          <div class="top_headpack">
                                             <h6>Package Info</h6>
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal">Add Package </a>
                                          </div>

                                         
  <div class="css-dropdimen" >
      <button size="375" type="button" class="css-buttonpack" tabindex="1">
         <div class="css-textbtn">
            <div class="css-textbtnspan">Custom Dimensions</div>
         </div>
         <span class="css-spanarrow"><i class="fa fa-chevron-down"></i></span>
      </button>

<div class="drop_downselectdi" style="display: none;">
<div class="drop_downselectdi01">
  <section class="section_drop">
    <div class="smalltext_hr">New package</div>
    <ul class="css-ullist">
      <li class="css-ullistli">
      <div class="css-divli">
        <div>
          Enter Custom Dimensions</div>
          <div class="css-q2mmh9"></div>
        </div>
      </li>
</ul>

 <div class="smalltext_hr">Choose from package  <span class="add_packgesmall" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i>  Add New </span></div>
    <ul class="css-ullist">
      <li class="css-ullistli">
      <div class="css-divli">
        <div>
         Package 1
         </div>
        </div>
      </li>
      <li class="css-ullistli">
      <div class="css-divli">
        <div>
         Package 2
         </div>
        </div>
      </li>
</ul>
  </section>
</div>
</div>

   </div>


<div>
   <div class="css-textseconhead">Dimensions</div>
   <div class="css-box01">
      <div class="css-boxa01">
         <div class="css-lentext">L</div>
         <input tabindex="1" type="text" data-e2e="parcel-form-customdims-length" class="css-inputpack" value="">
      </div>
      <div class="css-inthu">X</div>
      <div class="css-boxa01">
         <div class="css-lentext">W</div>
         <input tabindex="1" type="text" data-e2e="parcel-form-customdims-width" class="css-inputpack" value="">
      </div>
      <div class="css-inthu">X</div>
      <div class="css-boxa01">
         <div class="css-lentext">H</div>
         <input tabindex="1" type="text" data-e2e="parcel-form-customdims-height" class="css-inputpack" value="">
      </div>
      <div class="css-boxa02">
         <select>
           <option>cm</option>
           <option>in</option>
           <option>mm</option>
         </select>
       
      </div>
   </div>
   <div class="css-zhwgfk">Enter dimensions of package</div>
</div>
<div>
   <div class="css-textseconhead">Package Weight</div>
   <div class="css-box01 ccsboxa01">
      <div class="css-boxa01">
         <input tabindex="1" type="text" class="css-inputpack" value="0.025">
      </div>
      
      <div class="css-boxa02">
         <select>
           <option>g</option>
           <option>kg</option>
           <option>oz</option>
            <option>lb</option>
         </select>
      </div>
      <div class="check_useitme">
        <input type="checkbox" name="" id="inlinecheck"> <label class="form-check-label" for="inlinecheck">Use weight of items</label>
      </div>
   </div>
   <div class="css-zhwgfk">Includes packaging</div>
</div>

<div class="box_footersec">
  <button class="cancel_btnpack">Cancel</button>
  <button class="save_btnpack">Save</button>
</div>



                                            </div>

                                            <div class="css_backmobilebg" style="display: none;"></div>

                                            <!-- ************************* -->


     
     
 <div class="site-footer">
        <p style="color: #000;font-size: 14px;margin-bottom: 0rem;" >© Torod 2021 | Legal</p>
    </div>

      <script src="js/jquery-2.2.4.min.js"></script>
      <script type="text/javascript" src="js/main.js"></script>
      <!-- <script src="js/owl.carousel.min.js"></script> -->
      <script src="js/bootstrap.min.js"></script>
      <script src="js/aos.js"></script>
      <script type="text/javascript">

  $(".hide-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
  </script>

       <script type="text/javascript">
  $(".menu-item-has-children>a").click(function() {
$(this).parent().children('div.sub_menudash').show();
});
  </script>
      <script type="text/javascript">
  $(".head_cssdash").click(function() {
$(this).parent('div.sub_menudash').hide();
});
  </script>
 <script type="text/javascript">
  $("#clickmobmenu1").click(function() {
$('.menu_dashboard').toggle();
$('#black_hidemenu').toggle();
});
  </script>
   <script type="text/javascript">
  $("#black_hidemenu").click(function() {
$('.menu_dashboard').hide();
$('#black_hidemenu').hide();
});
  </script>

<script type="text/javascript">
    $("#orders-filters-menu").click(function() {
$('.css-vmxz80').toggle();
$('#filter_backg').toggle();
});

</script>
   <script type="text/javascript">
  $("#filter_backg").click(function() {
$('.css-vmxz80').hide();
$('#filter_backg').hide();
});
  </script>
<script type="text/javascript">
    $(".user-profile").click(function() {
$('.user_acc').toggle();
$('#useracc_backg').toggle();
});

</script>
   <script type="text/javascript">
  $("#useracc_backg").click(function() {
$('.user_acc').hide();
$('#useracc_backg').hide();
});
  </script>
   <script type="text/javascript">
  $(".css-1mmu128 div").click(function() {
    // $('.css-1mmu128 div').removeclass("active");
  $(".css-1mmu128 div").removeClass("active");
      // add class to the one we clicked
      $(this).addClass("active");
$('tbody.css-1oteowz').hide();
$('.crate_orderby').hide();  
       setTimeout(function () {
$('tbody.css-1oteowz').show();
$('.crate_orderby').show();
   }, 1000);
});
  </script>
<script type="text/javascript">
    $("a.web_showing").click(function() {
$(this).parent('div.edit_packagebtn').children('.web-edit_packagebox').toggle();
});
</script>
<script type="text/javascript">
    $("a.mob_showing").click(function() {
$('.mob-edit_packagebox').toggle();
$('.css_backmobilebg').toggle();
});
</script>
<script type="text/javascript">
    $(".css_backmobilebg").click(function() {
$('.mob-edit_packagebox').hide();
$('.css_backmobilebg').hide();
});
</script>
<script type="text/javascript">
    $("button.cancel_btnpack").click(function() {
$(this).parent().parent().toggle();
$('.css_backmobilebg').hide();
});

</script>
<script type="text/javascript">
    $("button.save_btnpack").click(function() {
$(this).parent().parent().toggle();
$('.css_backmobilebg').hide();
});

</script>

<script type="text/javascript">
    $(".css-buttonpack").click(function() {
$(this).parent('div.css-dropdimen').children('.drop_downselectdi').toggle();
});
</script>

   </body>
</html>