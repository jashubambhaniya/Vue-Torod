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
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
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
                     <ul class="css-12eett4">
                        <li><a href="#">My profile</a></li>
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
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                           <img src="image/user_icon.png" alt=""> User
                           <!-- <span><i  class=" fa fa-angle-down"></i> </span> -->
                        </a>
                        <div class="user_acc" style="display: none;">
                           <ul class="css-12eett4">
                              <li><a href="#">My profile</a></li>
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
                  <li><a href="dashboard-orders.php"><img src="image/dashboard_icon02.png"> <span>Orders</span></a></li>
                  <li><a href="list-orders.php"><img src="image/dashboard_icon04.png"> <span>Shipments</span></a></li>
                  <li> <a href="tracking-page.php"><img src="image/dashboard_icon12.png"><span>Tracking</span></a></li>
                  <li><a href="customers.php"><img src="image/dashboard_icon05.png"> <span>Customers</span></a></li>
                  <li> <a href="return-page.php"><img src="image/dashboard_icon03.png"><span>Returns</span></a></li>
                  <li class="menu-item-has-children parent">
                     <a href="#" class="level-top"> <img src="image/dashboard_icon07.png"> <span>Settings</span></a>
                     <div class="sub_menudash showmenu" style="display: none;">
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
                                 <li > <a href="addresses.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Address </a></li>
                              </ul>
                           </div>
                           <div class="sub_menu2">
                              <h5 class="head_2menu"><img src="image/dashboard_icon14.png"> Integration</h5>
                              <ul>
                                 <li> <a href="all-store.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Connect store</a> </li>
                                 <li> <a href="carriers.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Carriers </a></li>
                                 <li > <a href="api.php"><i class="fa fa-angle-right" aria-hidden="true"></i> API  </a></li>
                              </ul>
                           </div>
                           <div class="sub_menu2">
                              <h5 class="head_2menu"><img src="image/dashboard_icon15.png"> Configuration</h5>
                              <ul>
                                 <li> <a href="label-settings.php"><i class="fa fa-angle-right" aria-hidden="true"></i>  Labels</a> </li>
                                 <li class=""> <a href="packages.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Package </a></li>
                                 <li class="active"> <a href="notifications.php"> <i class="fa fa-angle-right" aria-hidden="true"></i> Notification </a></li>
                                 <li> <a href="automations.php"><i class="fa fa-angle-right" aria-hidden="true"></i>  Automation </a></li>
                              </ul>
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
                     <h3 class="head_title">Notification  </h3>
                     <br>
                     <p class="p_new mar_left20">Keep your customers informed with shipment notifications.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="row mar_leftcss">
            <div class="col-md-12">
               <div class="card_css">
                  <div class="css-tabtrack">
                     <div id="customer_notification" class="css-tabtrackli active">Customer Notification </div>
                     <div id="my_notification" class="css-tabtrackli">My Notification</div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row mar_leftcss customer-notification">
            <div class="col-md-12">
               <div class="card_css">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="box_barandcss2">
                                 <div class="text-left bor_bo">
                                    <h5 class="css_h5text">Customer Notifications</h5>
                                 </div>
                              </div>
                           </div>
                           <br>    <br>
                           <div class="col-md-12 border_email">
                              <div class="row " >
                                 <div class="col-md-10">
                                    <div class="">
                                       <h6 class="font14">Send tracking  email to my customers          </h6>
                                       <a herf="#" class="font13" data-toggle="modal" data-target="#tracking_email01" style="cursor: pointer;">Email preview</a>
                                       <br>
                                       <!--    <div class="edit_automessage">
                                          <span class="span_01"> <i class="fa fa-envelope-o" aria-hidden="true"></i> Autosend is Off</span>  <span class="span_02edit" data-toggle="modal" data-target="#exampleModal"> Edit</span>
                                          </div> -->
                                    </div>
                                 </div>
                                 <div class="col-md-2">
                                    <div class="switch_active">
                                       <input type="checkbox" class="toggle-switch oversize" id="toggle01">
                                       <!-- <label for="toggle3">  Activate return portal</label> -->
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 border_email">
                              <div class="row " >
                                 <div class="col-md-10">
                                    <div class="">
                                       <h6 class="font14">Send confirmation email to customers when shipment has been delivered</h6>
                                       <a herf="#" class="font13 " data-toggle="modal" data-target="#tracking_email" style="cursor: pointer;">Email preview</a>
                                       <br>
                                       <!--   <div class="edit_automessage">
                                          <span class="span_01"> <i class="fa fa-envelope-o" aria-hidden="true"></i> Autosend is Off</span>  <span class="span_02edit" data-toggle="modal" data-target="#exampleModal01"> Edit</span>
                                          </div> -->
                                    </div>
                                 </div>
                                 <div class="col-md-2">
                                    <div class="switch_active">
                                       <input type="checkbox" class="toggle-switch oversize" id="toggle02">
                                       <!-- <label for="toggle3">  Activate return portal</label> -->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row mar_leftcss my-notification" style="display: none;">
            <div class="col-md-12">
               <div class="card_css">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="box_barandcss2">
                                 <div class="text-left bor_bo">
                                    <h5 class="css_h5text">My Notifications</h5>
                                 </div>
                                 <br>

                                   <div class="col-md-12 border_email">
                              <div class="row " >
                                 <div class="col-md-10">
                                    <div class="">
                                       <h6 class="font14">Pick-up attempt failed </h6>
                                       <p class="font13">Notify me when a pick up trail failed  </p>
                                  
                                   
                                    </div>
                                 </div>
                                 <div class="col-md-2">
                                    <div class="switch_active">
                                       <input type="checkbox" class="toggle-switch oversize" id="togglemy01">
                                      
                                    </div>
                                 </div>
                              </div>
                           </div>
                               <div class="col-md-12 border_email">
                              <div class="row " >
                                 <div class="col-md-10">
                                    <div class="">
                                       <h6 class="font14">Pick-up attempt success </h6>
                                       <p class="font13">  Notify me when a shipment has been picked up by the courier </p>
                                  
                                    </div>
                                 </div>
                                 <div class="col-md-2">
                                    <div class="switch_active">
                                       <input type="checkbox" class="toggle-switch oversize" id="togglemy02">
                                      
                                    </div>
                                 </div>
                              </div>
                           </div>
                               <div class="col-md-12 border_email">
                              <div class="row " >
                                 <div class="col-md-10">
                                    <div class="">
                                       <h6 class="font14"> Failed delivery attempt     </h6>
                                       <p class="font13"> Notify me when a delivery attempt failed </p>
                                  
                                      
                                      
                                    </div>
                                 </div>
                                 <div class="col-md-2">
                                    <div class="switch_active">
                                       <input type="checkbox" class="toggle-switch oversize" id="togglemy03">
                                      
                                    </div>
                                 </div>
                              </div>
                           </div>
                            <div class="col-md-12 border_email">
                              <div class="row " >
                                 <div class="col-md-10">
                                    <div class="">
                                       <h6 class="font14"> Delayed shipment       </h6>
                                       <p class="font13"> Notify me when any shipment got delayed</p>
                                  
                                      
                                    </div>
                                 </div>
                                 <div class="col-md-2">
                                    <div class="switch_active">
                                       <input type="checkbox" class="toggle-switch oversize" id="togglemy03">
                                      
                                    </div>
                                 </div>
                              </div>
                           </div>
                            <!--      <div class="border_email">
                                    <h6 class="font14">Shipment notification email: inform customers about shipment and tracking information.</h6>
                                    <a herf="#" class="font13 ">Send sample email to my account address</a>
                                    <br>
                                    <div class="edit_automessage">
                                       <span class="span_01"> <i class="fa fa-envelope-o" aria-hidden="true"></i> Autosend is Off</span>  <span class="span_02edit" data-toggle="modal" data-target="#exampleModal"> Edit</span>
                                    </div>
                                 </div>
                                 <div class="border_email">
                                    <h6 class="font14">Delivery confirmation email: let customers know when their package has been delivered.</h6>
                                    <a herf="#" class="font13 ">Send sample email to my account address</a>
                                    <br>
                                    <div class="edit_automessage">
                                       <span class="span_01"> <i class="fa fa-envelope-o" aria-hidden="true"></i> Autosend is Off</span>  <span class="span_02edit" data-toggle="modal" data-target="#exampleModal01"> Edit</span>
                                    </div>
                                 </div> -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="tracking_email" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-header">
                  <h6 class="modal-title" id="exampleModalLabel"> Tracking Email  </h6>
                  <a href="#" id="edit_trackemail">Edit template</a>
                  <a href="#" id="back_trackemail" style="display: none;">Back to  template</a>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body email_template">
                  <div class="row">
                     <div class="col-md-12">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background:#F5F5F5;border: 1px solid #edf0f2;" align="center">
                           <tr>
                              <td align="center" valign="top">
                                 <table width="600" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
                                    <tr>
                                       <td class="td container" style="width:600px; min-width:600px; font-size:0pt; line-height:0pt; margin:0; font-weight:normal; padding:20px 0px;">
                                          <!-- Header -->
                                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                             <tr>
                                                <td class="p30-15 tbrr" style="padding: 20px; border-radius:3px 3px 0px 0px;border-top: 5px solid #6900ff;" bgcolor="#ffffff">
                                                   <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                      <tr>
                                                         <th class="column-top" width="245" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                               <tr>
                                                                  <td class="img m-left" style="color: #555555;margin-bottom: 10px;margin-top: 10px;font-size: 14px;font-family: 'Poppins';line-height: 1.6;text-align: center;">   
                                                                     <img src="image/logo.png" width="150" alt="logo">
                                                                  </td>
                                                                  <td class="img m-center" style="color: #555555;margin-bottom: 10px;margin-top: 10px;font-size: 14px;font-family: 'Poppins';line-height: 1.6;text-align: center;">  </td>
                                                               </tr>
                                                            </table>
                                                         </th>
                                                      </tr>
                                                   </table>
                                                </td>
                                             </tr>
                                          </table>
                                          <!-- END Header -->
                                          <!-- Hero Image -->
                                          <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
                                             <tr>
                                                <td style="">
                                                   <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                      <tr>
                                                         <td class="p30-15" style="padding: 20px 20px;">
                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                               <tr>
                                                                  <td class="h1 pb25" style="font-weight: 600;margin-top: 20px;margin-bottom: 10px;    font-family: 'Poppins'; line-height: 1.5 !important;color: #000;padding-bottom: 10px;    overflow: auto;text-align: left;font-size: 1.4rem;border-bottom: 1px solid #555;">Your Test Company order has been delivered</td>
                                                               </tr>
                                                            </table>
                                                         </td>
                                                      </tr>
                                                   </table>
                                                </td>
                                             </tr>
                                          </table>
                                          <!-- END Hero Image -->
                                          <!-- Intro -->
                                          <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
                                             <tr>
                                                <td style="">
                                                   <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                      <tr>
                                                         <td class="p30-15" style="padding: 10px 20px;">
                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                               <tr>
                                                                  <td class="h1 pb25" style="color: #000;font-weight: 500;margin-top: 20px;margin-bottom: 10px;    font-family: 'Poppins'; line-height: 1.5 !important;padding-bottom: 10px;    overflow: auto;text-align: left;font-size: 15px;">Dear user,</td>
                                                               </tr>
                                                               <tr>
                                                                  <td class="h1 pb25" style="line-height: 2;margin-bottom: 10px;font-size: 14px;font-family: 'Poppins';color: #000;text-align: left;font-weight: 400;"> Your order from Test Company has been delivered to the following address  </td>
                                                               </tr>
                                                               <tr>
                                                                  <td class="h1 pb25" style="line-height: 1.6;margin-top: 10px;font-size: 14px;font-family: 'Poppins';color: #555555;text-align: left;font-weight: 400;padding-top: 10px;padding-bottom: 10px;"><b style="font-weight: 400;color: #000;">Address</b> <br>
                                                                     **************<br>
                                                                     **********<br>
                                                                     ***************<br>
                                                                  </td>
                                                               </tr>
                                                               <tr>
                                                                  <td class="h1 pb25" style="margin-bottom: 10px;font-size: 13px;font-family: 'Poppins';color: #000;text-align: left;font-weight: 400;"> Your tracking number is <b>4553255TEST. </b> </td>
                                                               </tr>
                                                               <tr>
                                                                  <td class="h1 pb25" style="margin-bottom: 10px;font-size: 13px;font-family: 'Poppins';color: #000;text-align: center;font-weight: 400;"><a href="#" style="background-color:#6900ff;font-size: 16px;color: #ffff; padding: 10px 30px;margin: 20px;display: inline-block;border-radius: 3px;">See Order</a> </td>
                                                               </tr>
                                                            </table>
                                                         </td>
                                                      </tr>
                                                   </table>
                                                </td>
                                             </tr>
                                          </table>
                                          <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
                                             <tr>
                                                <td style="padding-bottom: 10px;">
                                                   <table width="100%" border="0" cellspacing="0" cellpadding="0" >
                                                      <tr>
                                                      </tr>
                                                   </table>
                                                </td>
                                             </tr>
                                          </table>
                                          <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background: #6900ff;border-radius:0px 0px 5px 5px;">
                                             <tr>
                                                <td class="pb10" style="padding-bottom:0px;"></td>
                                             </tr>
                                             <tr>
                                                <td class="pb10" style="padding:15px;">
                                                   <div style="color:#ffff;font-family: 'Poppins';font-size:12px;line-height:160%" align="center">Copyright 2021. All Rights Reserved By <a href="#" style="text-decoration: none;color: #fff;">Torod</a></div>
                                                </td>
                                             </tr>
                                          </table>
                                          <!-- END Footer -->
                                       </td>
                                    </tr>
                                 </table>
                              </td>
                           </tr>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="modal-body email_templateedit" style="display: none;">
                  <div class="row">
                     <div class="col-md-7">
                        <div class="box_barandcss">
                           <div class="text-left bor_bo">
                              <h5 class="css_h5text">Your Logo</h5>
                           </div>
                           <div>
                              <br>
                              <form id="form1" runat="server">
                                 <div class="left">
                                    <img id="img-uploaded" src="image/logo.png" alt="your image" />
                                 </div>
                                 <div class="right">
                                    <div class="name_image"></div>
                                    <span class="file-wrapper">
                                    <input type="file" name="photo" id="imgInp" class="uploader" accept="image/*"/>
                                    <span class=" btn-large btn-alpha">Upload logo</span>
                                    </span>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-5">
                        <div class="box_barandcss">
                           <div class="text-left bor_bo">
                              <h5 class="css_h5text">Brand Color</h5>
                           </div>
                           <br>
                           <div style="margin-bottom: 8px;margin-top: 7px;">
                              <span class="color-picker">
                              <label for="colorPicker">
                              <input type="color" value="#662cfc" id="colorPicker">
                              <span>#662cfc</span></label>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="box_barandcss">
                           <div class="text-left bor_bo">
                              <h5 class="css_h5text">Email subject</h5>
                           </div>
                           <br>
                           <div>
                              <input type="text" name="" value="Order Tracking" class="form-control font13">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="box_barandcss">
                           <div class="text-left bor_bo">
                              <h5 class="css_h5text">Email heading</h5>
                           </div>
                           <br>
                           <div>
                              <input type="text" name="" value="Your Test Company order has been delivered" class="form-control font13">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="box_barandcss">
                           <div class="text-left bor_bo">
                              <h5 class="css_h5text">Inner content</h5>
                           </div>
                           <br>
                           <div>
                              <textarea class="form-control font13" >Your order from Test Company has been delivered to the following address </textarea>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group text-right">
                           <button type="submit" class="next_btn">Save</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Modal -->


          <!-- Modal -->
      <div class="modal fade" id="tracking_email01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-header">
                  <h6 class="modal-title" id="exampleModalLabel01"> Tracking Email  </h6>
                  <a href="#" id="edit_trackemail01">Edit template</a>
                  <a href="#" id="back_trackemail01" style="display: none;">Back to  template</a>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body email_template01">
                  <div class="row">
                     <div class="col-md-12">
                       <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background:#F5F5F5;border: 1px solid #edf0f2;" align="center">
         <tr>
            <td align="center" valign="top">
               <table width="600" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
                  <tr>
                     <td class="td container" style="width:600px; min-width:600px; font-size:0pt; line-height:0pt; margin:0; font-weight:normal; padding:20px 0px;">
                        <!-- Header -->
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                           <tr>
                              <td class="p30-15 tbrr" style="padding: 20px; border-radius:3px 3px 0px 0px;border-top: 0px double #6900ff;" bgcolor="#ffffff">
                                 <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                       <th class="column-top" width="245" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
                                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                             <tr>
                                                <td class="img m-left" style="color: #555555;margin-bottom: 10px;margin-top: 10px;font-size: 14px;font-family: 'Poppins';line-height: 1.6;text-align: center;">   
                          <img src="image/logo.png" width="150" alt="logo">
                        
                       </td>
                         <td class="img m-center" style="color: #555555;margin-bottom: 10px;margin-top: 10px;font-size: 14px;font-family: 'Poppins';line-height: 1.6;text-align: center;">  </td>
                                             </tr>
                                          </table>
                                       </th>
                                     
                                    </tr>
                                 </table>
                              </td>
                           </tr>
                        </table>
                        <!-- END Header -->
                        <!-- Hero Image -->
                                              <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#6900ff">
    <tr>
       <td style="">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
             <tr>
                <td class="p30-15" style="padding: 30px 0px;">
                   <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                         <td class="h1 pb25" style="font-weight: 500;margin-top: 20px;margin-bottom: 10px;    font-family: 'Poppins'; line-height: 1.5 !important;color: white;padding-bottom: 0px;    overflow: auto;text-align: center;font-size: 1.5rem;">Your Test Company order is on its way</td>
                      </tr>
                      
                       
                   </table>
                </td>
             </tr>
          </table>
       </td>
    </tr>
</table>
                        <!-- END Hero Image -->
                        <!-- Intro -->
                              <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
    <tr>
       <td style="">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
             <tr>
                <td class="p30-15" style="padding: 30px 20px;">
                   <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                         <td class="h1 pb25" style="color: #000;font-weight: 500;margin-top: 20px;margin-bottom: 10px;    font-family: 'Poppins'; line-height: 1.5 !important;padding-bottom: 10px;    overflow: auto;text-align: left;font-size: 15px;">Dear user,</td>
                      </tr>
                       <tr>
                         <td class="h1 pb25" style="line-height: 2;margin-bottom: 10px;font-size: 14px;font-family: 'Poppins';color: #000;text-align: left;font-weight: 400;"> Your order from Test Company has shipped!  </td>
                      </tr>
                       <tr>
                         <td class="h1 pb25" style="line-height: 2;margin-bottom: 10px;font-size: 14px;font-family: 'Poppins';color: #000;text-align: left;font-weight: 400;"> The package is being shipped via Torod to the following address:  </td>
                      </tr>
                       <tr>
                         <td class="h1 pb25" style="line-height: 1.6;margin-top: 10px;font-size: 14px;font-family: 'Poppins';color: #555555;text-align: left;font-weight: 400;padding-top: 10px;padding-bottom: 10px;"><b style="font-weight: 400;color: #000;">Address</b> <br>
                          **************<br>
                          **********<br>
                          ***************<br>
                          </td>
                      </tr>
                       <tr>
                         <td class="h1 pb25" style="margin-bottom: 10px;font-size: 13px;font-family: 'Poppins';color: #000;text-align: left;font-weight: 400;"> Your tracking number is 4553255TEST. <a href="preview-tracking.php" style="text-decoration: underline;">You can track your shipment on this page.</a>  </td>
                      </tr>
                       
                   </table>
                </td>
             </tr>
          </table>
       </td>
    </tr>
</table>
         




     

     
     <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
        <tr>
           <td style="padding-bottom: 10px;">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" >
                 <tr>
                  
                 </tr>
              </table>
           </td>
        </tr>
     </table>

      





                      
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background: #6900ff;border-radius:0px 0px 5px 5px;">
                           <tr>
                              <td class="pb10" style="padding-bottom:0px;"></td>
                           </tr>
                           <tr>
                              <td class="pb10" style="padding:15px;">
                                 <div style="color:#ffff;font-family: 'Poppins';font-size:12px;line-height:160%" align="center">Copyright 2021. All Rights Reserved By <a href="#" style="text-decoration: none;color: #fff;">Torod</a></div>
                              </td>
                           </tr>
                         </table>
                        <!-- END Footer -->
                     </td>
                  </tr>
               </table>
            </td>
         </tr>
      </table>

                     </div>
                  </div>
               </div>
               <div class="modal-body email_templateedit01" style="display: none;">
                  <div class="row">
                     <div class="col-md-7">
                        <div class="box_barandcss">
                           <div class="text-left bor_bo">
                              <h5 class="css_h5text">Your Logo</h5>
                           </div>
                           <div>
                              <br>
                              <form id="form1" runat="server">
                                 <div class="left">
                                    <img id="img-uploaded" src="image/logo.png" alt="your image" />
                                 </div>
                                 <div class="right">
                                    <div class="name_image"></div>
                                    <span class="file-wrapper">
                                    <input type="file" name="photo" id="imgInp" class="uploader" accept="image/*"/>
                                    <span class=" btn-large btn-alpha">Upload logo</span>
                                    </span>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-5">
                        <div class="box_barandcss">
                           <div class="text-left bor_bo">
                              <h5 class="css_h5text">Brand Color</h5>
                           </div>
                           <br>
                           <div style="margin-bottom: 8px;margin-top: 7px;">
                              <span class="color-picker">
                              <label for="colorPicker">
                              <input type="color" value="#662cfc" id="colorPicker">
                              <span>#662cfc</span></label>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="box_barandcss">
                           <div class="text-left bor_bo">
                              <h5 class="css_h5text">Email subject</h5>
                           </div>
                           <br>
                           <div>
                              <input type="text" name="" value="Shipment has been delivered" class="form-control font13">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="box_barandcss">
                           <div class="text-left bor_bo">
                              <h5 class="css_h5text">Email heading</h5>
                           </div>
                           <br>
                           <div>
                              <input type="text" name="" value="Your Test Company order is on its way" class="form-control font13">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="box_barandcss">
                           <div class="text-left bor_bo">
                              <h5 class="css_h5text">Inner content</h5>
                           </div>
                           <br>
                           <div>
                              <textarea class="form-control font13" >Your order from Test Company has shipped! </textarea>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group text-right">
                           <button type="submit" class="next_btn">Save</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Modal -->
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-md">
            <div class="modal-content">
               <div class="modal-header">
                  <h6 class="modal-title" id="exampleModalLabel"> Email Notification Settings </h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <label style="vertical-align: middle;font-size: 13px;">
                           <input type="checkbox" id="email_autoselect" class="" style="    vertical-align: middle;">
                           Automatically send shipment notification email after label creation
                           </label>
                        </div>
                     </div>
                  </div>
                  <div id="timeselect_email" class="row disabled">
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="lname" class="font13">How soon after label creation should the email be sent?</label>
                           <select id="select_emailsent" class="form-control font13" style="width: 280px;font-size: 13px;" disabled="">
                              <option >No delay (send immediately)  </option>
                              <option>30 minutes</option>
                              <option>1 hour</option>
                              <option selected="">3 hours</option>
                              <option>12 hours</option>
                              <option>24 hours</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="row ">
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="lname" class="font13">Add custom text to email
                           </label>
                           <textarea placeholder="1,000 characters limit" class="form-control font13" rows="6" id="input-19" ></textarea>
                        </div>
                     </div>
                  </div>
                  <p class="font13 color_gray">Note: Changing these settings will only apply to future label creation</p>
                  <div class="form-group text-right">
                     <button type="submit" class="next_btn">Save</button>
                     <!-- <a  class="next_btn btn" id="" type="submit">Save</a> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Modal -->
      <!-- Modal -->
      <div class="modal fade" id="exampleModal01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-md">
            <div class="modal-content">
               <div class="modal-header">
                  <h6 class="modal-title" id="exampleModalLabel"> Delivery Confirmation Email Settings </h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <label style="vertical-align: middle;font-size: 13px;">
                           <input type="checkbox" id="" class="" style="    vertical-align: middle;">
                           Send notification email after shipment was delivered
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="row ">
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="lname" class="font13">Add custom text to email
                           </label>
                           <textarea placeholder="1,000 characters limit" class="form-control font13" rows="6" id="input-19" ></textarea>
                        </div>
                     </div>
                  </div>
                  <p class="font13 color_gray">Note: Changing these settings will only apply to future label creation</p>
                  <div class="form-group text-right">
                     <button type="submit" class="next_btn">Save</button>
                     <!-- <a  class="next_btn btn" id="" type="submit">Save</a> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Modal -->
      <div class="site-footer">
         <p style="color: #000;font-size: 14px;margin-bottom: 0rem;" >© Torod 2021 | Legal</p>
      </div>
      <script src="js/jquery-2.2.4.min.js"></script>
      <script type="text/javascript" src="js/main.js"></script>
      <!-- <script src="js/owl.carousel.min.js"></script> -->
      <script src="js/bootstrap.min.js"></script>
      <script src="js/aos.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
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
         $(this).parent().children('div.sub_menudash').addClass("showmenu");
         });
      </script>
      <script type="text/javascript">
         $(".head_cssdash").click(function() {
         $(this).parent('div.sub_menudash').removeClass("showmenu");
         });
      </script>
      <script type="text/javascript">
         $(".menu-item-has-children>a").click(function() {
         $(this).parent().children('div.sub_menudash').show();
         });
      </script>
      <script type="text/javascript">
         $(".head_cssdash").click(function() {
           // alert('fghfg');
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
         //faq toggle stuff 
         $('.toggle_orderdetails').click(function(e) {
         e.preventDefault();
         var notthis = $('.active').not(this);
         notthis.find('.fa-angle-down').addClass('fa-angle-right').removeClass('fa-angle-down');
         notthis.toggleClass('active').next('.faqanswer').slideToggle(300);
         $(this).toggleClass('active').next().slideToggle("fast");
         $(this).children('i').toggleClass('fa-angle-right fa-angle-down');
         });
      </script>
      <script>
         $(document).ready(function(){
           $("#myInput").on("keyup", function() {
             var value = $(this).val().toLowerCase();
             $("#myTable tr").filter(function() {
               $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
             });
           });
         });
      </script>
      <script type="text/javascript">
         $(document).ready(function() {
           $('#email_autoselect').change(function() {
               if(this.checked) {
                 $('#timeselect_email').removeClass('disabled');
                 $('#select_emailsent').removeAttr("disabled");
               }
               else{
         $('#timeselect_email').addClass('disabled');
                 $('#select_emailsent').attr("disabled","disabled");
               }
              
           });
         });
      </script>
      <script type="text/javascript">
         $("#customer_notification").click(function() {
           $(".css-tabtrackli").removeClass("active");
         $(this).addClass("active");
         $(".customer-notification").show();
         $(".my-notification").hide();
         });
      </script>
      <script type="text/javascript">
         $("#my_notification").click(function() {
           $(".css-tabtrackli").removeClass("active");
         $(this).addClass("active");
         $(".my-notification").show();
         $(".customer-notification").hide();
         });
      </script>
      <script type="text/javascript">
         $("#edit_trackemail").click(function() {
           $(".email_template").hide();
            $("#edit_trackemail").hide();
         $(".email_templateedit").show();
         $("#back_trackemail").show();
         });
         
           $("#back_trackemail").click(function() {
           $(".email_template").show();
            $("#edit_trackemail").show();
         $(".email_templateedit").hide();
         $("#back_trackemail").hide();
         });
         
         
      </script>
         <script type="text/javascript">
         $("#edit_trackemail01").click(function() {
           $(".email_template01").hide();
            $("#edit_trackemail01").hide();
         $(".email_templateedit01").show();
         $("#back_trackemail01").show();
         });
         
           $("#back_trackemail01").click(function() {
           $(".email_template01").show();
            $("#edit_trackemail01").show();
         $(".email_templateedit01").hide();
         $("#back_trackemail01").hide();
         });
         
         
      </script>
      <script type="text/javascript">
         $('#toggle01').on('change', function() {
         if(this.checked) {
                   $('#tracking_email01').modal('show');
               }
               else{
         $('#tracking_email01').modal('hide');
               }  
         });
      </script>
      <script type="text/javascript">
         $('#toggle02').on('change', function() {
         if(this.checked) {
                   $('#tracking_email').modal('show');
               }
               else{
         $('#tracking_email').modal('hide');
               }  
         });
      </script>

           <script type="text/javascript">
         $('#togglemy01').on('change', function() {
         if(this.checked) {
                   $('#exampleModal').modal('show');
               }
               else{
         $('#exampleModal').modal('hide');
               }  
         });
      </script>
      <script type="text/javascript">
         /*----------------------------------------
         Upload btn
         ------------------------------------------*/
         var SITE = SITE || {};
          
         SITE.fileInputs = function() {
           var $this = $(this),
               $val = $this.val(),
               valArray = $val.split('\\'),
               newVal = valArray[valArray.length-1],
               $button = $this.siblings('.btn'),
               $fakeFile = $this.siblings('.file-holder');
           if(newVal !== '') {
             // $button.text('Photo Chosen');
             if($fakeFile.length === 0) {
               $('.name_image').html('<span class="file-holder">' + newVal + '</span>');
               // $button.before('<span class="file-holder">' + newVal + '</span>');
             } else {
               $fakeFile.text(newVal);
             }
           }
         };
          
         
         $('.file-wrapper input[type=file]').bind('change focus click', SITE.fileInputs);
         
         function readURL(input) {
           if (input.files && input.files[0]) {
             var reader = new FileReader();
             var tmppath = URL.createObjectURL(event.target.files[0]);
         
             reader.onload = function (e) {
              
               $('#img-uploaded').attr('src', e.target.result);
               // $('input.img-path').val(tmppath);
             }
         
             reader.readAsDataURL(input.files[0]);
           }
         }
         
         $(".uploader").change(function(){
           readURL(this);
         });
         
         
      </script>
   </body>
</html>