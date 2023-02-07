<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex">
    <script>
        mwAdmin = true;
        admin_url = 'http://localhost:8000/admin/';
    </script>

    <link rel="stylesheet" id="mw-default-css" href="http://localhost:8000/userfiles/modules/microweber/default.css" type="text/css">
<link rel="stylesheet" id="mw-ui-css" href="http://localhost:8000/userfiles/modules/microweber/api/libs/mw-ui/grunt/plugins/ui/css/main_with_mw.css" type="text/css">
<script id="mw-api-js" src="http://localhost:8000/userfiles/cache/apijs_combined/api.combined.2134338509.admin_2282622326.1.3.2.js"></script>

    <script type="text/javascript">
        mw.lib.require('jqueryui');
        mw.require("http://localhost:8000/userfiles/modules/microweber/api/libs/jquery_slimscroll/jquery.slimscroll.min.js");
        mw.require("liveadmin.js");
        mw.require("http://localhost:8000/userfiles/modules/microweber/css/wysiwyg.css");
        mw.require("http://localhost:8000/userfiles/modules/microweber/css/components.css");
        mw.require("wysiwyg.js");
        mw.require("url.js");
        mw.require("options.js");
        mw.require("events.js");
        mw.require("admin.js");
        mw.require("editor_externals.js");
        mw.require("keys.js");
        mw.require("css_parser.js");
        mw.require("custom_fields.js");
        mw.require("session.js");
        mw.require("content.js");
        mw.require("upgrades.js");
        mw.require("tree.js");

        mw.lib.require('mwui');
        mw.lib.require('mwui_init');
        mw.lib.require('flag_icons', true);
        mw.require("http://localhost:8000/userfiles/modules/microweber/css/admin.css", true);

                    </script>
            <script type="text/javascript">
            $(document).ready(function () {
                $('.mw-lazy-load-module').reload_module();

                if (self === top) {
                    window.onhashchange = function () {
                        mw.cookie.set('back_to_admin', location.href);
                    }
                    mw.cookie.set('back_to_admin', location.href);
                }

                mw.$("#mw-quick-content,#mw_edit_pages_content,#mw-admin-content").click(function () {
                    if (mw.helpinfo != undefined) {
                        mw.cookie.set('helpinfo', false, 4380);
                        $(".helpinfo_helper").fadeOut();
                    }
                });
            });
            // mw.require("http://localhost:8000/userfiles/modules/microweber/css/ui.css");
            mw.require("fonts.js");


        </script>
        
    <script src="http://localhost:8000/userfiles/cache/livewire/1.3.2/livewire/livewire.js" data-turbo-eval="false" data-turbolinks-eval="false" ></script><script data-turbo-eval="false" data-turbolinks-eval="false" >window.livewire = new Livewire();window.Livewire = window.livewire;window.livewire_app_url = 'http://localhost:8000';window.livewire_token = 'XhC7rllOJdGAwin6cs80Htoccikb2ObC4hDmLe66';window.deferLoadingAlpine = function (callback) {window.addEventListener('livewire:load', function () {callback();});};let started = false;window.addEventListener('alpine:initializing', function () {if (! started) {window.livewire.start();started = true;}});document.addEventListener("DOMContentLoaded", function () {if (! started) {window.livewire.start();started = true;}});</script>    <style >[wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid], [wire\:loading\.inline-flex] {display: none;}[wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short], [wire\:loading\.delay\.long], [wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest] {display:none;}[wire\:offline] {display: none;}[wire\:dirty]:not(textarea):not(input):not(select) {display: none;}input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {animation-duration: 50000s;animation-name: livewireautofill;}@keyframes livewireautofill { from {} }</style>
    <!-- Alpine v3 -->
    <script defer src="http://localhost:8000/userfiles/modules/microweber/api/libs/alpine/alpine.min.js"></script>
    <!-- Livewire sortable -->
    <script defer src="http://localhost:8000/userfiles/modules/microweber/api/libs/livewire-sortable/livewire-sortable.js"></script>

    



</head>



<body class="is_admin loading view- action-">

<div>
    <div>
        @livewire('livewire-ui-modal')
    </div>
</div>




<script>
    $(document).ready(function () {
        $(".mw-admin-mobile-admin-sidebar-toggle").on('click', function () {
            $("#main-bar").toggleClass('mobile-active')
        })
        $("body").on('click', function (e) {
            if (!mw.tools.hasAnyOfClassesOnNodeOrParent(e.target, ['mw-admin-mobile-admin-sidebar-toggle'])) {
                $("#main-bar").removeClass('mobile-active')
            }

        })
    })


    function mw_admin_add_order_popup(ord_id) {
        var contentHolder = document.createElement('div');
        contentHolder.style.padding = '25px';
        var dlg = mw.dialog({
            content: contentHolder,
            title: !!ord_id ? 'Edit order' : 'Add order',
            width: 900
        });
        mw.spinner({element: contentHolder, size: 32})
        mw.load_module('shop/orders/admin/add_order', contentHolder, function (){
            contentHolder.style.padding = '0';
            mw.spinner({element: contentHolder, size: 32}).remove()
            dlg.center()
        }, { order_id: ord_id });
    }

</script>









<div id="mw-admin-container">
    <header class="position-sticky sticky-top bg-white admin-navigation-colorscheme">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center py-1">

                <ul class="nav" id="admin-header-logo-nav">
                    <li id="admin-logo-nav-toggle">
                        <span class="js-toggle-mobile-nav">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </li>
                    <li id="admin-logo">
                                                <a href="http://localhost:8000/admin/view:dashboard">
                            <img alt="" src="http://localhost:8000/userfiles/modules/microweber/api/libs/mw-ui/assets/img/logo.svg">
                        </a>
                    </li>

                                            <li class="mx-1 d-none d-md-block">
                            <button type="button" class="btn btn-success btn-rounded btn-sm-only-icon " data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-plus"></i> <span class="d-none d-md-block">Add New</span>
                            </button>
                            <div class="dropdown-menu ">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <a class="dropdown-item" href="http://localhost:8000/admin/page/create"><span class="mai-page"></span> Page</a>
                                                                                                                                                                                                                                                                                                                                                                    <a class="dropdown-item" href="http://localhost:8000/admin/post/create"><span class="mai-post"></span> Post</a>
                                                                                                                                                                                                                                                                                                                                                                    <a class="dropdown-item" href="http://localhost:8000/admin/category/create"><span class="mai-category"></span> Category</a>
                                                                                                                                                                                                                                                                                                                                                                    <a class="dropdown-item" href="http://localhost:8000/admin/shop/product/create"><span class="mai-product"></span> Product</a>
                                                                                                </div>
                        </li>
                    
                </ul>

                <div class="mw-lazy-load-module module" id="admin-header-notification" type="admin/header_notifications"></div>


                
                <ul class="nav">
                                            <li class="mx-1">
                            <a href="http://localhost:8000/contact-us?editmode=n" class="btn btn-outline-success btn-rounded btn-sm-only-icon go-live-edit-href-set go-live-edit-href-set-view">
                                <i class="mdi mdi-earth"></i><span class="d-none d-md-block ml-1">Website</span>
                            </a>
                        </li>
                        <li class="mx-1">
                            <a href="http://localhost:8000/contact-us?editmode=y" class="btn btn-primary btn-rounded btn-sm-only-icon go-live-edit-href-set">
                                <i class="mdi mdi-eye-outline"></i><span class="d-none d-md-block ml-1">Live Edit</span>
                            </a>
                        </li>
                    
                                    </ul>
            </div>
        </div>
    </header>
    
    <div class="main container my-3">
        <aside>
                                    
            
            


            <ul class="nav flex-column" id="mw-admin-main-navigation">
                <li class="nav-item">
                    <a href="http://localhost:8000/admin/" class="nav-link ">
                        <i class="mdi mdi-view-dashboard"></i> Dashboard                    </a>
                </li>

                
                                    <li class="nav-item dropdown-no-js active">

                        <a href="http://localhost:8000/admin/content" class="nav-link dropdown-toggle  active">
                            <i class="mdi mdi-earth"></i>
                            <span class="badge-holder">Website</span>
                        </a>

                        <div class="dropdown-menu">
                            <a href="http://localhost:8000/admin/page" class="dropdown-item  active ">
                                Pages                                <span class="btn btn-success btn-rounded btn-icon btn-sm add-new" data-bs-toggle="tooltip" title="Add new page" data-href="http://localhost:8000/admin/page/create"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewbox="0 0 24 24"><path fill="white" d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z"></path></svg></span>
                            </a>

                            <a class="dropdown-item " href="http://localhost:8000/admin/post">
                                Posts                                <span class="btn btn-success btn-rounded btn-icon btn-sm add-new" data-bs-toggle="tooltip" title="Add new post" data-href="http://localhost:8000/admin/post/create"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewbox="0 0 24 24"><path fill="white" d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z"></path></svg></span>
                            </a>

                            <a class="dropdown-item " href="http://localhost:8000/admin/view:content/action:categories">
                                Categories                                <span class="btn btn-success btn-rounded btn-icon btn-sm add-new" data-href="http://localhost:8000/admin/category/create" data-bs-toggle="tooltip" title="Add new category"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewbox="0 0 24 24"><path fill="white" d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z"></path></svg></span>
                            </a>
                                                            <a href="http://localhost:8000/admin/shop/product" class="dropdown-item ">
                                    Products                                    <span data-href="http://localhost:8000/admin/shop/product/create" class="btn btn-success btn-rounded btn-icon btn-sm add-new" data-bs-toggle="tooltip" title="Add new product"><i class="mdi mdi-plus"></i></span>
                                </a>
                                                        <a class="dropdown-item " href="http://localhost:8000/admin/view:content/action:settings">
                                Settings                            </a>
                        </div>
                    </li>
                
                                    <li class="nav-item dropdown-no-js ">
                        <a href="http://localhost:8000/admin/shop/product" class="nav-link dropdown-toggle ">
                            <i class="mdi mdi-shopping"></i>
                            <span class="badge-holder">Shop</span>
                        </a>
                        <div class="dropdown-menu">

                           <!-- <a href="" class="dropdown-item  active ">
                                                            </a>-->

                         <!--                                   <a href="view:shop/action:products" class="dropdown-item  active ">
                                                                        <span data-href="" class="btn btn-success btn-rounded btn-icon btn-sm add-new" data-bs-toggle="tooltip" title=""><i class="mdi mdi-plus"></i></span>
                                </a>
                            -->
                                                            <a href="http://localhost:8000/admin/shop/product" class="dropdown-item ">
                                    Products                                    <span data-href="http://localhost:8000/admin/shop/product/create" class="btn btn-success btn-rounded btn-icon btn-sm add-new" data-bs-toggle="tooltip" title="Add new product"><i class="mdi mdi-plus"></i></span>
                                </a>
                            
                                                            <a href="http://localhost:8000/admin/order" class="dropdown-item ">
                                    Orders                                                                        <span data-href="javascript:mw_admin_add_order_popup()" class="btn btn-success btn-rounded btn-icon btn-sm add-new" data-bs-toggle="tooltip" title="Add order"><i class="mdi mdi-plus"></i></span>
                                </a>
                            

                            
                                <a href="http://localhost:8000/admin/shop/category" class="dropdown-item ">
                                    Categories                                    <span data-href="http://localhost:8000/admin/shop/category/create" class="btn btn-success btn-rounded btn-icon btn-sm add-new" data-bs-toggle="tooltip" title="Add new category"><i class="mdi mdi-plus"></i></span>
                                </a>

                            
                                                            <a href="http://localhost:8000/admin/customers" class="dropdown-item ">
                                    Clients                                </a>

                                                            
                            
                            <a href="http://localhost:8000/admin/view:shop/action:options" class="dropdown-item ">
                                Settings                            </a>


                        </div>
                    </li>
                
                                    <li class="nav-item">
                                                <a href="http://localhost:8000/admin/view:modules" class="nav-link "><i class="mdi mdi-view-grid-plus"></i> Modules </a>
                    </li>
                
                                    
                        
                        <li class="nav-item">
                            <a href="http://localhost:8000/admin/view:packages" class="nav-link ">
                                <i class="mdi mdi-fruit-cherries"></i> Marketplace                                                            </a>
                        </li>
                                    
                <li class="nav-item dropdown">
                    <a class="nav-link  " href="http://localhost:8000/admin/view:settings#option_group=all">
                        <i class="mdi mdi-cog"></i>
                        <span class="badge-holder">Settings</span>
                    </a>

                </li>





                
                                <li class="nav-item dropdown ">
                    <a class="nav-link " href="http://localhost:8000/admin/view:modules/load_module:users/action:profile">
                        <i class="mdi mdi-account-multiple"></i> Users                    </a>

                                                                        <!--                            <a class="dropdown-item" href="javascript:;" onmousedown="mw.contactForm();"><strong>--><!--</strong></a>-->
                                                                <!--                    <a href="--><!--?editmode=y" class="go-live-edit-href-set dropdown-item">--><!--</a>-->
                </li>

                <li class="nav-item"><a href="http://localhost:8000/logout" class="nav-link"><i class="mdi mdi-power"></i> Log out</a></li>



              

                <div class="mt-5">
                    
<div class="form-group text-center">
     <div class="plain-language-selector tip" data-tip="Admin language">
        <select name="lang" id="lang_selector_admin_footer" data-width="100%" data-title="English">
            
                            <option value="en_US" selected>
                    English [en_US]                </option>
            
                            <option value="af_ZA">
                    Afrikaans [af_ZA]                </option>
            
                            <option value="sq_AL">
                    Albanian [sq_AL]                </option>
            
                            <option value="ar_SA">
                    Arabic [ar_SA]                </option>
            
                            <option value="id_ID">
                    Bahasa Indonesia [id_ID]                </option>
            
                            <option value="ms_MY">
                    Bahasa Melayu [ms_MY]                </option>
            
                            <option value="bg_BG">
                    Bulgarian [bg_BG]                </option>
            
                            <option value="hr_HR">
                    Croatian [hr_HR]                </option>
            
                            <option value="da_DK">
                    Dansk [da_DK]                </option>
            
                            <option value="de_DE">
                    Deutsch [de_DE]                </option>
            
                            <option value="es_ES">
                    Español [es_ES]                </option>
            
                            <option value="fi_FI">
                    Finnish [fi_FI]                </option>
            
                            <option value="fr_FR">
                    Français [fr_FR]                </option>
            
                            <option value="el_GR">
                    Greek [el_GR]                </option>
            
                            <option value="it_IT">
                    Italiano [it_IT]                </option>
            
                            <option value="ja_JP">
                    Japanese [ja_JP]                </option>
            
                            <option value="hu_HU">
                    Magyar [hu_HU]                </option>
            
                            <option value="nl_NL">
                    Nederlands [nl_NL]                </option>
            
                            <option value="no_NO">
                    Norwegian [no_NO]                </option>
            
                            <option value="uz_UZ">
                    Oʻzbek [uz_UZ]                </option>
            
                            <option value="pl_PL">
                    Polski [pl_PL]                </option>
            
                            <option value="pt_BR">
                    Português [pt_BR]                </option>
            
                            <option value="ro_RO">
                    Română [ro_RO]                </option>
            
                            <option value="sk_SK">
                    Slovenčina [sk_SK]                </option>
            
                            <option value="sl_SI">
                    Slovenščina [sl_SI]                </option>
            
                            <option value="sv_SE">
                    Svenska [sv_SE]                </option>
            
                            <option value="th_TH">
                    Thai [th_TH]                </option>
            
                            <option value="tr_TR">
                    Türkçe [tr_TR]                </option>
            
                            <option value="uk_UA">
                    Ukrainian [uk_UA]                </option>
            
                            <option value="vi_VN">
                    Vietnamese [vi_VN]                </option>
            
                            <option value="zu_ZA">
                    Zulu [zu_ZA]                </option>
            
                            <option value="cs_CZ">
                    Čeština [cs_CZ]                </option>
            
                            <option value="ru_RU">
                    Русский [ru_RU]                </option>
            
                            <option value="mk_MK">
                    македонски јазик [mk_MK]                </option>
            
                            <option value="he_IL">
                    עברית [he_IL]                </option>
            
                            <option value="fa_IR">
                    فارسی [fa_IR]                </option>
            
                            <option value="hi_IN">
                    हिन्दी [hi_IN]                </option>
            
                            <option value="zh_CN">
                    中文 (中国) [zh_CN]                </option>
            
                            <option value="ko_KR">
                    한국어 [ko_KR]                </option>
            
            <option value="edit_languages_redirect">✎ Edit languages...</option>
        </select>
    </div>
</div>
    <script>
        document.querySelector("#lang_selector_admin_footer").addEventListener("change", function () {

            if(this.value == 'edit_languages_redirect'){

               window.location.href = 'http://localhost:8000/admin/view:settings#option_group=language';

            } else {
                mw.admin.language(this.value);

            }
        });
    </script>
                </div>
            </ul>


            <script>

                var handleConfirmBeforeLeave = function (c) {
                    if (mw.askusertostay) {
                        mw.confirm(mw.lang("You have unsaved changes. Do you want to save them first") + '?',
                            function () {

                                c.call(undefined, true)
                            },
                            function (){
                                mw.askusertostay = false;
                                c.call(undefined, false)
                            });
                    } else {
                        c.call(undefined, false)
                    }
                };
                $(document).ready(function () {



                    mw.$('.go-live-edit-href-set').each(function () {
                        var el = $(this);

                        if(self !== top){
                            el.attr('target', '_parent');
                        }


                        var href = el.attr('href');

                        if (href.indexOf("editmode") === -1) {
                            href = href + ((href.indexOf('?') === -1 ? '?' : '&') + 'editmode:y');

                            el.attr('href', href);

                        }
                    }).on('mousedown touchstart', function (event){
                        var el = this;

                        if(event.which === 1 || event.type === 'touchstart') {
                            handleConfirmBeforeLeave(function (shouldSave){
                                if(shouldSave) {
                                    var edit_cont_form =  $('#quickform-edit-content');
                                    var edit_cont_form_is_disabled_btn =  $('#js-admin-save-content-main-btn').attr('disabled');
                                    var edit_cont_title =  $('#content-title-field').val();
                                    if (edit_cont_form.length /*&& mw.edit_content && edit_cont_title && !edit_cont_form_is_disabled_btn*/) {
                                        event.stopPropagation();
                                        event.preventDefault();
                                        mw.askusertostay = false;
                                        mw.edit_content.saving = false;
                                        if($(this).hasClass('go-live-edit-href-set-view')){
                                            mw.edit_content.handle_form_submit('n');
                                        } else {
                                            mw.edit_content.handle_form_submit('y');
                                        }
                                    }
                                } else {
                                    mw.askusertostay = false;
                                    location.href = el.getAttribute('href');

                                }
                            });
                        }

                    });
                });
            </script>
        </aside>


        
    <main class="module-">

                    <div class=" module module-content-edit " content_id="39" content_type="page" id="main-content-edit-admin" data-type="content/edit" parent-module="content/edit" parent-module-id="main-content-edit-admin">
<div class="mw-edit-content-item-admin">


          <script>
    $(document).ready(function () {
        if (window.thismodal && thismodal.resize) {
            thismodal.resize(991);
        }
    });
</script>

    <style>
    #admin-user-nav {
        display: none;
    }
</style>

    <script>
        $(document).ready(function () {
            $('.fade-window .btn-fullscreen').on('click', function () {
                $(this).toggleClass('hidden');
                $('.fade-window .btn-close').toggleClass('hidden');
                $('.fade-window').toggleClass('closed');

            });
            $('.fade-window .btn-close').on('click', function () {
                $(this).toggleClass('hidden');
                $('.fade-window .btn-fullscreen').toggleClass('hidden');
                $('.fade-window').toggleClass('closed');
            });


            $('.fade-window').on('scroll', function () {
                var otop = $('.mw-iframe-editor').offset().top;
                $('#mw-admin-content-iframe-editor iframe').contents().find('#mw-admin-text-editor')[otop <= 0 ? 'addClass' : 'removeClass']('scrolled').css({
                    top: otop <= 0 ? Math.abs(otop) : 0
                });
            })

        });
    </script>

<script>
    $(document).ready(function () {
        $('body > #mw-admin-container > .main').removeClass('show-sidebar-tree');
    });
</script>

<script>

    var contentChanged = function (state) {
     //   document.querySelector('.btn-save').disabled = !state;
        mw.askusertostay = state;
        document.querySelector('#content-title-field-row .card-header').classList[state ? 'add' : 'remove']('post-header-content-changed')
    }

    $(document).ready(function () {
        var all = $(window);
        var header = document.querySelector('#mw-admin-container header');
        var postHeader = mw.element(document.querySelector('#content-title-field-row .card-header'));
        all.push(document)
        all.on('scroll load resize', function () {
            var stop = $(this).scrollTop(),
                otop = $('.mw-iframe-editor').offset().top,
                tbheight = $('.admin-toolbar').outerHeight(),
                is = (stop + tbheight) >= otop;


            $('#mw-admin-content-iframe-editor iframe').contents().find('#mw-admin-text-editor')[is ? 'addClass' : 'removeClass']('scrolled').css({
                top: is ? Math.abs((stop + tbheight) - otop) : 0
            });
            var fixinheaderTime = null;
            if (stop > $(".admin-toolbar").height()) {

                $(".top-bar").addClass("fix-in-header").css('left', $('.window-holder').offset().left);
                fixinheaderTime = setTimeout(function () {
                    $(".top-bar").addClass("after-fix-in-header")
                    // $("#create-content-btn").hide()
                }, 10)
            }
            else {
                $(".top-bar").removeClass("fix-in-header after-fix-in-header");
                //$("#create-content-btn").show()
                clearTimeout(fixinheaderTime)

            }
            var isFixed = (stop > (postHeader.get(0).offsetHeight + (header ? header.offsetHeight : 0) + $(postHeader).offset().top));
            postHeader[ isFixed ? 'addClass' : 'removeClass' ]('fixed')
            postHeader.width( isFixed ? postHeader.parent().width() : 'auto' )


        });







    });
</script>


<div class="in-window">

        <script>
        slugFromUrlField = function (field) {
            var val = $(field).val();
            var slug = mw.slug.create(val);

            if(val != slug){
                $(field).val(slug);
            }

        }

        slugEdited = !(mw.url.windowHashParam('action') || '').includes('new:');
        slugFromTitle = function () {
            if (slugEdited === false) {
                var slug = mw.slug.create($('#content-title-field').val());
                $('.js-slug-base-url-changed').val(slug);
                $('.js-slug-base-url').text(slug);
            }
        }

    </script>



    <form method="post" class="mw_admin_edit_content_form  " action="http://localhost:8000/api/page/39" id="quickform-edit-content" autocomplete="off">

                    <input name="_method" type="hidden" value="PATCH">
        
        <input type="hidden" name="id" id="mw-content-id-value" value="39">
        <input type="hidden" name="subtype" id="mw-content-subtype" value="static">
        <input type="hidden" name="subtype_value" id="mw-content-subtype-value-529996765" value="">
        <input type="hidden" name="content_type" id="mw-content-type mw-content-type-value-529996765" value="page">
        <input type="hidden" name="parent" id="mw-parent-page-value-529996765" value="0" class="">
        <input type="hidden" name="layout_file" id="mw-layout-file-value-529996765" value="layouts__contact_us.php">
        <input type="hidden" name="active_site_template" id="mw-active-template-value-529996765" value="">

        <script type="text/javascript">
        $(document).ready(function () {
           $('.mw-edit-page-layout-selector').change(function() {
              if ($(this).val() == 'layouts__blog.php') {
                  $('#mw-content-subtype').val('dynamic');
                  $('#mw-content-type').val('page');
              }
              if ($(this).val() == 'layouts__shop.php') {
                    $('#mw-content-subtype').val('dynamic');
                    $('#mw-content-type').val('page');
                    $('#is_shop').attr('checked','checked');
                    $('#is_shop').trigger('change');
              }
           });
        });
        </script>

        
        <div class="position-relative">
            <div class="main-toolbar mw-modules-toolbar-back-button-holder">
                <a href="http://localhost:8000/admin/page" class="btn btn-link text-silver px-0">
                    <i class="mdi mdi-chevron-left"></i> Back to Pages                </a>
            </div>
        </div>


        <div class="row">
            <div class="col-md-8 manage-content-body">



                


                <div class="content-title-field-row card style-1 mb-3 border-0" id="content-title-field-row">
                    <div class="card-header-fix">
                        <div class="card-header">
                            <h5><i class="mdi mdi-file-document text-primary mr-3"></i> <strong>Editing page</strong></h5>


                            <div id="content-title-field-buttons" class="mw-page-component-disabled">


                               
                                                                            <a title="Live Edit" href="http://localhost:8000/contact-us?editmode=y" class="btn   btn-outline-primary  btn-sm  btn-sm-only-icon mw-admin-go-live-now-btn mx-1">
                                            <i class="mdi mdi-eye-outline me-1"></i><span>Live Edit</span>
                                        </a>
                                    
                                
                                <button id="js-admin-save-content-main-btn" type="submit" class="btn btn-sm btn-success btn-save js-bottom-save" form="quickform-edit-content"><span><i class="mdi mdi-content-save me-1"></i>Save</span></button>
                            </div>
                        </div>
                    </div>

                                            <div class="card-body pt-3">

                            <div class="form-group" id="slug-field-holder">
                                <label class="control-label">Page title</label>

                                
                                <input type="text" class="form-control" name="title" value="Contact us" id="content-title-field" onkeyup="slugFromTitle();" autocomplete="">
                                                                <div class="mw-admin-post-slug">
                                    <i class="mdi mdi-link mdi-20px lh-1_3 mr-1 text-silver float-left" title="Copy link" onclick="copy_url_of_page();" style="cursor: copy"></i>
                                    <span class="mw-admin-post-slug-text">
                                            
                                        <span class="text-silver" id="slug-base-url">http://localhost:8000/</span>
                                        <span class="contenteditable js-slug-base-url" data-bs-toggle="tooltip" data-title="edit" data-placement="right" contenteditable="true">contact-us</span>
                                    </span>
                                  </div>

                                <div class="d-none">
                                    <input autocomplete="off" name="url" id="edit-content-url" class="js-slug-base-url-changed edit-post-slug" type="text" value="contact-us">

                                    <script>


                                        $('.js-slug-base-url').on('paste', function (e) {
                                            e.preventDefault();
                                            var text = (e.originalEvent || e).clipboardData.getData('text/plain');
                                            document.execCommand("insertHTML", false, text);
                                            if(this.innerHTML.length > mw.slug.max) {
                                                this.innerHTML = this.innerHTML.substring(0, mw.slug.max)
                                            }
                                            contentChanged(true)
                                            slugEdited = true;
                                        })
                                        .on('keydown', function (e) {
                                            var sel = getSelection();
                                            var fn = mw.wysiwyg.validateCommonAncestorContainer(sel.focusNode);
                                            var collapsedIn = fn === this && sel.isCollapsed;
                                            slugEdited = true;
                                            contentChanged(true)
                                            if (mw.event.is.enter(e)  ) {
                                                e.preventDefault();
                                            }
                                            if (!mw.event.is.delete(e) && !mw.event.is.backSpace(e) && !e.ctrlKey) {
                                                if ($('.js-slug-base-url').html().length >= mw.slug.max && collapsedIn) {
                                                    e.preventDefault();
                                                }
                                            }
                                        })
                                        $('body').on('blur', '.js-slug-base-url', function () {
                                            var slug = mw.slug.create($(this).text());
                                            $('.js-slug-base-url-changed').val(slug);
                                            $('.js-slug-base-url').text(slug);
                                        });


                                         copy_url_of_page =function(){
                                            var site_url =  $('#slug-base-url').html();
                                            var slug_base_url =  $('.js-slug-base-url').html();
                                            var url = site_url + slug_base_url ;
                                            mw.tools.copy(url);
                                        }

                                    </script>
                                </div>

                                                            </div>


                            


                                                                                    
                            <div id="mw-edit-page-editor-holder">
                                                                                                                                                                                                                                                                </div>

                            <div>
                                <script>
                                    $(document).ready(function () {
                                        setTimeout(function () {
                                             if (typeof(mw.adminPagesTree) != 'undefined') {
                                                mw.adminPagesTree.select({
                                                    id:39,
                                                    type: 'page'
                                                })
                                            }
                                            contentChanged(false)
                                        }, 100);
                                    });
                                </script>

                                                                
                                
                                                                                            </div>
                        </div>
                                    </div>

                <div class="admin-manage-content-wrap">

                                                                        <div class=" module module-content-views-layout-selector " id="mw-quick-add-choose-layout-middle-pos" autoload="yes" template-selector-position="top" live-edit-btn-overlay="true" content-id="39" edit_page_id="39" inherit_from="0" small="true" parent-module-id="main-content-edit-admin" parent-module="content/edit" data-type="content/views/layout_selector">
<script>
    safe_chars_to_str = function (str) {
        if (str === undefined) {
            return;
        }
        return str.replace(/\\/g, '____').replace(/\'/g, '\\\'').replace(/\"/g, '\\"').replace(/\0/g, '____');
    }

    mw.templatePreview7e8cdfe2d7a65ed98572097c44f0abbe = {
        set: function () {
            var iframe = document.querySelector('.preview_frame_wrapper iframe');
            var framewindow = iframe.contentWindow;
            framewindow.scrollTo(0, 0);
         },
        rend: function (url) {
            var holder = mw.$('.preview_frame_container');
            var wrapper = mw.$('.preview_frame_wrapper');

            if (self !== top ) {
                holder.addClass('preview-in-iframe');
            } else {
                holder.addClass('preview-in-self')
            }

            var frame = document.createElement('iframe');
            frame.src = url;
            frame.className = 'preview_frame_small';
            frame.tabIndex = -1;
            frame.frameborder = 0;
            frame.onload = function (ev) {
                mw.templatePreview7e8cdfe2d7a65ed98572097c44f0abbe.set();
                this.contentWindow.document.documentElement.className = 'mw-template-document-preview';
                mw.spinner({
                    element: '.preview_frame_wrapper',
                }).hide()
            };
            holder.empty();
            mw.spinner({
                element: '.preview_frame_wrapper',
                size: 40
            }).show()
            holder.append(frame);
        },
        next: function () {
            var index = mw.templatePreview7e8cdfe2d7a65ed98572097c44f0abbe.selector.selectedIndex;
            var next = mw.templatePreview7e8cdfe2d7a65ed98572097c44f0abbe.selector.options[index + 1] !== undefined ? (index + 1) : 0;
            mw.templatePreview7e8cdfe2d7a65ed98572097c44f0abbe.view(next);
        },
        prev: function () {
            var index = mw.templatePreview7e8cdfe2d7a65ed98572097c44f0abbe.selector.selectedIndex;
            var prev = mw.templatePreview7e8cdfe2d7a65ed98572097c44f0abbe.selector.options[index - 1] !== undefined ? (index - 1) : mw.templatePreview7e8cdfe2d7a65ed98572097c44f0abbe.selector.options.length - 1;
            mw.templatePreview7e8cdfe2d7a65ed98572097c44f0abbe.view(prev);
        },
        view: function (which) {
            mw.templatePreview7e8cdfe2d7a65ed98572097c44f0abbe.selector.selectedIndex = which;
            mw.$("#layout_selector7e8cdfe2d7a65ed98572097c44f0abbe li.active").removeClass('active');
            mw.$("#layout_selector7e8cdfe2d7a65ed98572097c44f0abbe li").eq(which).addClass('active');
            $(mw.templatePreview7e8cdfe2d7a65ed98572097c44f0abbe.selector).trigger('change');
        },
        setHeight: function () {


        },
        zoom: function (a) {
            if (typeof a == 'undefined') {
                var holder = mw.$('.preview_frame_wrapper');
                holder.toggleClass('zoom');
                if (holder[0] != null) {
                    var iframe = holder[0].querySelector('iframe');
                    if (iframe != null) {
                        iframe.contentWindow.scrollTo(0, 0);
                    }
                }
            }
            else if (a == 'out') {
                mw.$('.preview_frame_wrapper').removeClass('zoom');
            }
            else {
                mw.$('.preview_frame_wrapper').addClass('zoom');
            }
            mw.$('.preview_frame_wrapper iframe')[0].contentWindow.scrollTo(0, 0);
        },
        generate: function (return_url) {



            var template = mw.$('#active_site_template_7e8cdfe2d7a65ed98572097c44f0abbe option:selected').val();
            var layout = mw.$('#active_site_layout_7e8cdfe2d7a65ed98572097c44f0abbe').val();
            var is_shop = mw.$('#active_site_layout_7e8cdfe2d7a65ed98572097c44f0abbe option:selected').attr('data-is-shop');
            var ctype = mw.$('#active_site_layout_7e8cdfe2d7a65ed98572097c44f0abbe option:selected').attr('data-content-type');
            var stype = mw.$('#active_site_layout_7e8cdfe2d7a65ed98572097c44f0abbe option:selected').attr('data-subtype');
            var stype_val = mw.$('#active_site_layout_7e8cdfe2d7a65ed98572097c44f0abbe option:selected').attr('data-subtype-value');
            var inherit_from = mw.$('#active_site_layout_7e8cdfe2d7a65ed98572097c44f0abbe option:selected').attr('inherit_from');


            var root = document.querySelector('#active_site_layout_7e8cdfe2d7a65ed98572097c44f0abbe');
            var form = mw.tools.firstParentWithClass(root, 'mw_admin_edit_content_form');


            if (form) {
                if (is_shop ) {
                    if (is_shop != undefined && is_shop == 'y') {

                        if (form && form.querySelector('input[name="is_shop"]:not(.custom-control-input-is-shop)') != null) {
                            form.querySelector('input[name="is_shop"]:not(.custom-control-input-is-shop)').checked = true;
                        }
                    }
                    else {
                        if (form && form.querySelector('input[name="is_shop"]:not(.custom-control-input-is-shop)') != null) {
                            form.querySelector('input[name="is_shop"]:not(.custom-control-input-is-shop)').checked = false;
                        }
                        if (form && form.querySelector('input[name="is_shop"][value="0"]:not(.custom-control-input-is-shop)') != null) {
                            //   form.querySelector('input[name="is_shop"][value="0"]').checked = true;
                        }
                    }
                } else {
                    

                    if (form && form.querySelector('input[name="is_shop"]:not(.custom-control-input-is-shop)') != null) {
                        form.querySelector('input[name="is_shop"]:not(.custom-control-input-is-shop)').checked = false;
                    }

                    
                }
                                if (ctype == 'static' || ctype == 'dynamic') {
                    if (form && form.querySelector('input[name="subtype"]') != null) {
                        form.querySelector('input[name="subtype"]').value = ctype
                    }
                }
                if (stype) {
                    if (form && form.querySelector('input[name="subtype"]') != null) {
                        form.querySelector('input[name="subtype"]').value = stype
                    }
                }
                if (stype_val) {
                    if (form && form.querySelector('input[name="subtype_value"]') != null) {
                        form.querySelector('input[name="subtype_value"]').value = stype_val
                    }
                }
                            }


            if (template != undefined) {
                if (typeof(form) == 'object' && form.querySelector('input[name="active_site_template"]') != null) {
                    form.querySelector('input[name="active_site_template"]').value = template
                }
                var template = safe_chars_to_str(template);
                var template = template.replace('/', '___');
            }
            if (layout != undefined) {
                if (typeof(form) == 'object' && form.querySelector('input[name="layout_file"]') != null) {
                    form.querySelector('input[name="layout_file"]').value = layout
                }
                var layout = safe_chars_to_str(layout);
                var layout = layout.replace('/', '___');
            }


            
            var inherit_from_param = '';
            if (inherit_from != undefined) {
                inherit_from_param = '&inherit_template_from=' + inherit_from;
            }

            var preview_template_param = '';
            if (template != undefined) {
                preview_template_param = '&preview_template=' + template;
                mw.$("#mw-quick-add-choose-layout-middle-pos").attr('active_site_template', template);
                if (template != 'default') {
                    mw.$("#selected-template-span-val").html(template);
                }
            }

            var preview_layout_param = '';
            if (layout != undefined) {
                preview_layout_param = '&preview_layout=' + layout;
                mw.$("#mw-quick-add-choose-layout-middle-pos").attr('layout_file', layout);
            }

            var preview_layout_content_type_param = '';
            
            var iframe_url = 'http://localhost:8000/contact-us?no_editmode=true' + preview_template_param + preview_layout_param + '&content_id=39' + inherit_from_param + preview_layout_content_type_param
            if (return_url == undefined) {
                mw.templatePreview7e8cdfe2d7a65ed98572097c44f0abbe.rend(iframe_url);
                            } else {
                return (iframe_url);
            }

        },
        _once: false
    }

    $(document).ready(function () {
        mw.$("#mw-quick-add-choose-layout-middle-pos").removeAttr('autoload');
        mw.templatePreview7e8cdfe2d7a65ed98572097c44f0abbe.selector = document.getElementById('active_site_layout_7e8cdfe2d7a65ed98572097c44f0abbe');

        $('select#active_site_template_7e8cdfe2d7a65ed98572097c44f0abbe').on("change", function (e) {
            var parent_module = $(this).parents('.module').first();
            if (parent_module != undefined) {
              //  var templ = $(this).val();
                var templ = $(this).find('option:selected').val()

              //  $(this).selectpicker('destroy');



                parent_module.attr('active_site_template', templ);
                parent_module.attr('data-active-site-template', templ);

                mw.$("#mw-quick-add-choose-layout-middle-pos").attr('active_site_template', templ);

                mw.templatePreview7e8cdfe2d7a65ed98572097c44f0abbe.generate();



                //mw.reload_module("#//", function () {
                //});
            }
            //mw.trigger('templateChanged');
        });

        mw.$('#active_site_layout_7e8cdfe2d7a65ed98572097c44f0abbe').on("change", function (e) {
            mw.templatePreview7e8cdfe2d7a65ed98572097c44f0abbe.generate();
            mw.trigger('templateChanged');
        });

        mw.templatePreview7e8cdfe2d7a65ed98572097c44f0abbe.generate();
    });
</script>


<div>
    
                
    
    
    
    <div class="layouts_box_holder">
        <div class="content-title-field-row card style-1  mb-3">
            <div class="card-header">
                <h5><i class="mdi mdi-text-box-check-outline text-primary mr-3"></i>

                                            <strong>Template</strong> - Bootstrap5                                    </h5>
                <div></div>
            </div>
            <div class="card-body pt-3">
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="card bg-light style-1 mb-3">
                            <div class="card-body pt-4 pb-5">
                                <div class="row">

                                    <div class="col-12">

                                        
                                        
                                        <div class="form-group mb-3">
                                            <label class="control-label">Choose Page Layout</label>
                                            <small class="text-muted d-block mb-2">Select a page from the current template</small>
                                            <div>
                                                <select name="preview_layout_file" class="selectpicker mw-edit-page-layout-selector" data-width="100%" data-live-search="true" data-size="7" id="active_site_layout_7e8cdfe2d7a65ed98572097c44f0abbe" autocomplete="off">
                                                                                                                                                                                                                                                                                                <option value="clean.php" onclick="mw.templatePreview7e8cdfe2d7a65ed98572097c44f0abbe.view('0');" data-index="0" data-layout_file="clean.php" data-is-default="true" data-content-type="static" title="Clean">
                                                                Clean                                                                </option>
                                                                                                                                                                                                                                                <option value="index.php" onclick="mw.templatePreview7e8cdfe2d7a65ed98572097c44f0abbe.view('1');" data-index="1" data-layout_file="index.php" data-content-type="static" title="Home">
                                                                Home                                                                </option>
                                                                                                                                                                                                                                                <option value="layouts__text-page.php" onclick="mw.templatePreview7e8cdfe2d7a65ed98572097c44f0abbe.view('2');" data-index="2" data-layout_file="layouts__text-page.php" data-content-type="static" title="Text page">
                                                                Text page                                                                </option>
                                                                                                                                                                                                                                                <option value="layouts__blog.php" onclick="mw.templatePreview7e8cdfe2d7a65ed98572097c44f0abbe.view('3');" data-index="3" data-layout_file="layouts__blog.php" data-content-type="dynamic" title="Blog">
                                                                Blog                                                                </option>
                                                                                                                                                                                                                                                <option value="layouts__shop.php" onclick="mw.templatePreview7e8cdfe2d7a65ed98572097c44f0abbe.view('4');" data-index="4" data-layout_file="layouts__shop.php" data-content-type="dynamic" data-is-shop="y" title="Shop">
                                                                Shop        (shop)                                                             </option>
                                                                                                                                                                                                                                                <option value="layouts__contact_us.php" onclick="mw.templatePreview7e8cdfe2d7a65ed98572097c44f0abbe.view('5');" data-index="5" data-layout_file="layouts__contact_us.php" selected data-content-type="static" title="Contact Us">
                                                                Contact Us                                                                </option>
                                                                                                                                                                                                                                                <option value="404.php" onclick="mw.templatePreview7e8cdfe2d7a65ed98572097c44f0abbe.view('6');" data-index="6" data-layout_file="404.php" data-content-type="static" title="Error 404">
                                                                Error 404                                                                </option>
                                                                                                                                                                                                                            <option title="Inherit" value="inherit">
                                                            Inherit                                                        </option>
                                                                                                    </select>
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

        <style>
            .preview_frame_container{
                position: relative;
                overflow: hidden;
            }
            .preview_frame_container.preview-in-self {
                height: calc(80vh - 80px);

            }
            .preview_frame_container.preview-in-self iframe {
                height: calc(160vh - 160px) !important;
            }

            .preview_frame_container.preview-in-iframe {
                height: 800px;

            }
            .preview_frame_container.preview-in-iframe iframe {
                height: 1600px !important;
            }
            .preview_frame_wrapper{
                position: relative;
            }
            .preview_frame_wrapper .mw-spinner{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

             .preview_frame_container iframe {
                width: 200%;
                transform: scale(.5);
                top: 0;
                position: absolute;
                left: 0;
                transform-origin: 0 0;
                border: 1px solid silver;
                transition: .3s;
            }
            .preview_frame_wrapper.has-mw-spinner iframe{
                opacity: 0;
            }


        </style>

        <div class="card style-1  mb-3">
            <div class="card-body pt-3">
                
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="font-weight-bold">Template preview</h5>
                        <small class="text-muted">Use the fields above to make changes.</small>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="preview_frame_wrapper loading left">
                            
                            <div class="preview_frame_container"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</div>
                        
                                            
                    
                    <div class="mw-admin-edit-content-holder">
                        
<script>
    mw.lib.require('colorpicker');
</script>


<div id="settings-tabs">
    <div class="card style-1 mb-3 images">
        <div class="card-header no-border" id="post-media-card-header">
            <h6><strong>Pictures</strong></h6>
            <div class="post-media-type-holder">
                <div class=" module module-pictures-admin-upload-pic-source-selector " id="edit-post-gallery-main-source-selector-holder" parent-module-id="main-content-edit-admin" parent-module="content/edit" data-type="pictures/admin_upload_pic_source_selector"><div id="mw-admin-post-media-type-select"></div>
</div>

            </div>
        </div>
        <div class="card-body pt-3">
            <div class="pictures-admin-content-type-page module module-pictures-admin " data-mw-title="Picture Gallery" id="edit-post-gallery-main" for="content" content_type="page" for-id="39" parent-module-id="main-content-edit-admin" parent-module="content/edit" data-type="pictures/admin">    <script type="text/javascript">
    mw.require('http://localhost:8000/userfiles/modules/pictures/pictures.js', true);
</script>

<style>
    .image-settings {
        color: #ffffff;
        font-size: 20px;
        cursor: pointer;
        position: absolute;
        top: 0px;
        right: 3px;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
        opacity: .7;
        z-index: 5;
        text-shadow: 0 0 2px rgba(0, 0, 0, .5);
    }


    .image-settings.settings-img {
        margin-right: 23px
    }

    .admin-thumb-item:hover .image-settings {
        opacity: 1;
    }

    .admin-thumb-item:hover .image-settings.remove-image {
        color: #ff4f52;
    }
</style>


<script>
    mw.require("files.js");
</script>

<script>
    after_upld = function (a, e, f, id, module_id) {
        if (e !== 'done') {
            var data = {};
            data['for'] = f;
            data.src = Array.isArray(a) ? a[0] : a;
            data.media_type = 'picture';

            if (!id) {
                data.for_id = 0;
            } else {
                data.for_id = (id);

            }
            mw.module_pictures.after_upload(data);
        }
        if (e === 'done') {
            setTimeout(function () {
                if (typeof load_iframe_editor === 'function') {
                    load_iframe_editor();
                }
                mw.reload_module_everywhere('pictures/admin_backend_sortable_pics_list');

                mw.reload_module_parent('pictures');
                if (self !== top && typeof parent.mw === 'object') {
                    mw.parent().reload_module('pictures');
                    mw.reload_module_parent("pictures/admin");
                    if (self !== top && typeof parent.mw === 'object') {
                        mw.parent().reload_module_everywhere('posts');
                        mw.parent().reload_module_everywhere('shop/products');
                        mw.parent().reload_module_everywhere('content', function () {
                            mw.reload_module_everywhere('#' + module_id);
                            mw.parent().reload_module_everywhere('pictures');
                        });
                    }
                }

                $('.admin-thumb-item-loading').remove();
                $('[data-type="pictures/admin"]').trigger('change')


            }, 1300);
        }
    }
</script>

<script>
    mw_admin_pictures_upload_browse_existing = function () {
        // var dialog = mw.top().dialogIframe({
        var dialog = mw.top().dialogIframe({
            url: 'http://localhost:8000/module/?type=files/admin&live_edit=true&remeber_path=true&ui=basic&start_path=media_host_base&from_admin=true&file_types=images&id=mw_admin_pictures_upload_browse_existing_modaledit-post-gallery-main&from_url=http://localhost:8000/',
            title: "Browse pictures",
            id: 'mw_admin_pictures_upload_browse_existing_modaledit-post-gallery-main',
            height: 'auto',
            autoHeight: true
        });

        $(dialog.iframe).on('load', function () {
            this.contentWindow.mw.on.hashParam('select-file', function (pval) {
                after_upld(pval, 'save', 'content', '39', 'edit-post-gallery-main');

                after_upld(pval, 'done', 'content', '39', 'edit-post-gallery-main');
                mw.notification.success('The image is added to the gallery');

                dialog.remove();
            })
        })
    };

    var getMediaImage = function () {
        var dialog = mw.top().tools.moduleFrame('pictures/media_library');
        dialog.title('Media library');
        $(dialog.iframe).on('load', function () {
            this.contentWindow.mw.on.hashParam('select-file', function (pval) {
                after_upld(pval, 'save', 'content', '39', 'edit-post-gallery-main');
                after_upld(pval, 'done', 'content', '39', 'edit-post-gallery-main');
                mw.notification.success('The image is added to the gallery');
                dialog.remove();
            });
        });
    };


    var toggleAll = function () {
        var all = mw.$(".admin-thumb-item input[type='checkbox']");

        if (all.length === all.filter(':checked').length) {
            all.each(function () {
                this.checked = false
            })
        } else {
            all.each(function () {
                this.checked = true
            })
        }

        doselect()
    }

</script>


<input name="thumbnail" type="hidden" value="">

<span class="post-media-select-all-pictures tip" data-tip="Select all" data-tipposition="top-left" onclick="toggleAll()">
    <span>0</span>
    picture selected
</span>

<div class="select_actions_holder">
    <div class="select_actions">
        <a href="javascript:;" class="btn btn-sm btn-link text-danger" onclick="deleteSelected()">
            <span>Delete selected</span>
        </a>
        <span>/</span>
        <a href="javascript:;" class="btn btn-sm btn-link" onclick="downloadSelected('none')">
            <span>Download selected</span>
        </a>
    </div>
</div>


<script>
    window.imageOptions = {};
</script>

<div class="pull-right">
    <div class=" module module-pictures-admin-upload-pic-source-selector " id="edit-post-gallery-main-source-selector-holder" parent-module-id="edit-post-gallery-main" parent-module="pictures/admin" data-type="pictures/admin_upload_pic_source_selector"><div id="mw-admin-post-media-type-select"></div>
</div>
</div>



<div class="left pt-3" style="clear:both" id="admin-thumbs-holder-sort-63e22cfe713b7">

    <div class="relative post-thumb-uploader m-t-10" id="backend_image_uploader_63e22cfe713b7"></div>



    <div class="admin-thumbs-holder">
                    <div class=" module module-pictures-admin-backend-sortable-pics-list " id="edit-post-gallery-main-pictures-admin-backend-sortable-pics-list" for="content" for_id="39" parent-module-id="edit-post-gallery-main" parent-module="pictures/admin" data-type="pictures/admin_backend_sortable_pics_list">
<script>

    var saveOptions = function (id, data) {

        mw.module_pictures.save_options(id, data, function () {
            mw.reload_module('#edit-post-gallery-main-pictures-admin-backend-sortable-pics-list');
            mw.reload_module('pictures/admin')
            mw.top().reload_module('pictures')
        });
    }

    imageConfigDialog = function (id) {
        var el = mw.$('#admin-thumb-item-' + id + ' .image-options');
        var dialog =  mw.top().dialog({
            overlay: true,
            content: el.html(),
            template: 'default',
            height: 'auto',

            title: 'Image Settings',
            onResult: function (id) {
                var data = {};
                var root = $(dialog.dialogContainer);
                root.find('input').each(function () {
                    data[this.name] = this.value;
                })
                saveOptions(id, data);
                this.remove()
            }
        })
    }


    deleteSelected = function () {
        mw.module_pictures.del(doselect());
    }
    downloadSelected = function () {
        mw.$(".admin-thumb-item .mw-ui-check input:checked").each(function () {
            var a = $("<a>")
                .attr("href", $(this).dataset('url'))
                .attr("download", $(this).dataset('url'))
                .appendTo("body");

            a[0].click();
            a.remove();
        });

    }
    doselect = function () {
        var final = [];
        var all = mw.$(".admin-thumb-item:visible")

        all.each(function () {
            var check = $('.mw-ui-check input:checked', this);
            if (check.length) {
                final.push(check[0].value);
                $(this).addClass('checked')
            } else {
                $(this).removeClass('checked');

            }
        });

        var allPicker = mw.$('.post-media-select-all-pictures');

        allPicker[final.length !== 0 ? 'addClass' : 'removeClass']('active').find('span').html(final.length);
        allPicker[final.length === all.length ? 'addClass' : 'removeClass']('all-selected');
        mw.$('#post-media-card-header')[final.length === 0 ? 'removeClass' : 'addClass']('active');
        $(".select_actions")[final.length === 0 ? 'removeClass' : 'addClass']('active');
        $(".select_actions_holder").stop()[final.length === 0 ? 'hide' : 'show']();
        return final;
    }
    editImageTags = function (event) {
        var parent = null;
        mw.tools.foreachParents(event.target, function (loop) {

            if (mw.tools.hasClass(this, 'admin-thumb-item')) {
                parent = this;
                mw.tools.stopLoop(loop);
            }

        });
        if (parent !== null) {
            $(".image-tags", parent).show()
        }

    }



    selectItems = function (val) {
        if (val === 'all') {
            mw.$(".admin-thumb-item .mw-ui-check input").each(function () {
                this.checked = true;
            })
        }
        else if (val === 'none') {
            mw.$(".admin-thumb-item .mw-ui-check input").each(function () {
                this.checked = false;
            })
        }
        doselect()
    }


    $(document).ready(function () {

        var $root = mw.$('#admin-thumbs-holder-sort-pic-sorter-63e22cfea2c2d');

        mw.require('filepicker.js');

        mw._postsImageUploader = new mw.filePicker({
            element: '#backend_image_uploader_pic-sorter-63e22cfea2c2d',
            nav: 'dropdown',
            footer: false,
            boxed: false,
            dropDownTargetMode: 'dialog',
            label: mw.lang('Media'),
            _frameMaxHeight: true,
            hideHeader: true,
            uploaderType: "big",
            multiple: true,
            accept: 'image/*',
        })

        mw._postsImageUploader._thumbpreload = function () {
            var el = mw.$('<div class="admin-thumb-item admin-thumb-item-loading"><span class="mw-post-media-img" style=""></span></div>');
            mw.$($root).find('.admin-thumb-item-uploader-holder').before(el);

            mw.spinner({
                element: el,
                size: 32,
                color: '#4592ff'
            });

        }

        $(mw._postsImageUploader).on('FileAdded', function (e, file) {
            mw._postsImageUploader._thumbpreload()
        });
        $(mw._postsImageUploader).on('FileUploaded FileUploadError', function (e, file) {
            mw.$('.admin-thumb-item-loading:last', $root).remove();
            mw.module_pictures.after_change();
        });
        $(mw._postsImageUploader).on('Result', function (e, res) {
            var url = res && res.src ? res.src : res;
            after_upld(url, 'Result', 'content', '39', 'edit-post-gallery-main-pictures-admin-backend-sortable-pics-list');
            after_upld(url, 'done');
            if (mw._postsImageUploader.settings.hideHeader) {
                mw._postsImageUploader.hide()
            } else {
                mw._postsImageUploader.hideUploaders()
            }
        });

        var thumbs = mw.$('.admin-thumb-item', $root);

        if (thumbs.length) {
            if (mw._postsImageUploader.settings.hideHeader) {
                mw._postsImageUploader.hide()
            } else {
                mw._postsImageUploader.hideUploaders()
            }
        }


        $(".image-tag-view").remove();
        $(".image-tags").each(function () {
            $(".mw-post-media-img", mw.tools.firstParentWithClass(this, 'admin-thumb-item'))
                .append('<span class="image-tag-view tip" onclick="editImageTags(event)" data-tip="Tags: ' + this.value + '" ><span class="mw-icon-app-pricetag"></span></span>');
            $(this).on('change', function () {
                $(".image-tag-view", mw.tools.firstParentWithClass(this, 'admin-thumb-item')).attr('data-tip', 'Tags: ' + this.value);
            });

        });

        doselect()
    });
</script>

<style>
    .admin-thumb-item-uploader-holder {
        display: block;
        position: relative;
        float: left;
        width: 18%;
        height: 110px;
        margin: 0 1% 1%;
        overflow: hidden;
    }

    .admin-thumb-item-uploader-holder:hover .dropable-zone.small-zone button {
        text-decoration: underline;
    }

    .admin-thumb-item-uploader-holder:hover .dropable-zone.small-zone {
        border-color: #4592ff;
        background-color: rgba(69, 146, 255, 0.1);
    }
</style>


<div class="mw-drop-zone" id="admin-thumbs-drop-zone-pic-sorter-63e22cfea2c2d" style="display: none">Drop here</div>


<script>
    $(document).ready(function () {
        mw.module_pictures.init('#admin-thumbs-holder-sort-pic-sorter-63e22cfea2c2d');

        var uploadHolder = mw.$('#admin-thumb-item-uploaderpic-sorter-63e22cfea2c2d');
        mw.require('uploader.js');

        mw._postsImageUploaderSmall = mw.upload({
            element: uploadHolder,
            accept: 'image/*',
            multiple: true,
            dropZone: '#admin-thumbs-drop-zone-pic-sorter-63e22cfea2c2d',
            on: {
                fileUploaded: function (xhr) {
                    mw.module_pictures.after_change();
                },
                fileUploadError: function (xhr) {
                    mw.$('.admin-thumb-item-loading:last').remove();
                    mw.module_pictures.after_change();
                }
            }
        });
        mw._postsImageUploaderSmall.$holder = uploadHolder.parent();
        $(mw._postsImageUploaderSmall).on('FileAdded', function (e, res) {
            mw._postsImageUploader._thumbpreload()
        })

        $(mw._postsImageUploaderSmall).on('FileUploaded', function (e, res) {
            var url = res.src ? res.src : res;
            if (window.after_upld) {
                after_upld(url, 'Result', 'content', '39', 'edit-post-gallery-main-pictures-admin-backend-sortable-pics-list');
                after_upld(url, 'done');
                mw._postsImageUploader.hide()
            }
        });

        if (!mw.$('#admin-thumbs-holder-sort-pic-sorter-63e22cfea2c2d .admin-thumb-item').length) {
            uploadHolder.hide();
            if (mw._postsImageUploader) {
                mw._postsImageUploader.show();
            }

        }

        var dropdownData = [
            {value: 'url', title: 'Add image from URL' },
            {value: 'server', title: 'Browse uploaded' },
            {value: 'library', title: 'Choose from Unsplash' },
            {value: 'file', title: 'Upload file' },
        ];

        var dropdownConfig = {
            placeholder: 'Add media from',
            data: dropdownData,
            element: '#mw-admin-post-media-type-select',
            size: 'small',
            color: 'default',
            showSelected: false
        }
        var slct = mw.select(dropdownConfig)
        slct.on('change', function (value){
            var val = value[0].value;
            if(val !== 'file') {
                mw._postsImageUploader.displayControllerByType(val)
            }
            slct.displayValue('Add media from')
        });
        slct.on('optionsReady', function (options) {
            var file = options.find(function (itm){
                return itm.$value.value === 'file';
            });
            if(file) {
                var up = mw.upload({
                    element: file,
                    accept: 'image/*',
                    multiple: true
                });
                $(up).on('FileAdded', function (e, res) {
                    mw._postsImageUploader._thumbpreload()
                })
                $(up).on('FileUploaded', function (e, res) {
                    var url = res.src ? res.src : res;
                    if (window.after_upld) {
                        after_upld(url, 'Result', 'content', '39', 'edit-post-gallery-main-pictures-admin-backend-sortable-pics-list');
                        after_upld(url, 'done');
                        mw._postsImageUploader.hide();
                    }
                });
            }
        });

        var dragTimer;
        $(document).on('dragover', function (e) {
            var dt = e.originalEvent.dataTransfer;
            if (dt.types && (dt.types.indexOf ? dt.types.indexOf('Files') !== -1 : dt.types.contains('Files'))) {
                $("#admin-thumbs-drop-zone-pic-sorter-63e22cfea2c2d").show();
                clearTimeout(dragTimer);
            }
        });
        $(document).on('dragleave', function (e) {
            dragTimer = setTimeout(function () {
                $("#admin-thumbs-drop-zone-pic-sorter-63e22cfea2c2d").hide();
            }, 25);
        });

        $("#admin-thumbs-drop-zone-pic-sorter-63e22cfea2c2d").on('drop', function () {
            $("#admin-thumbs-drop-zone-pic-sorter-63e22cfea2c2d").hide();
        });

        setInterval(function () {
            $('.admin-thumb-item, .admin-thumb-item-placeholder, .admin-thumb-item-uploader-holder, .mw-filepicker-desktop-type-small .mw-uploader-type-holder').each(function () {
                $(this).height($(this).width())
            })
        }, 78)


    });


</script>

<div class="admin-thumbs-holder" id="admin-thumbs-holder-sort-pic-sorter-63e22cfea2c2d">
    

</div>
</div>
            </div>
    <script>mw.require("files.js", true);</script>
     <script>

    var saveOptions = function (id, data) {

        mw.module_pictures.save_options(id, data, function () {
            mw.reload_module('#edit-post-gallery-main');
            mw.reload_module('pictures/admin')
            mw.top().reload_module('pictures')
        });
    }

    imageConfigDialog = function (id) {
        var el = mw.$('#admin-thumb-item-' + id + ' .image-options');
        var dialog =  mw.top().dialog({
            overlay: true,
            content: el.html(),
            template: 'default',
            height: 'auto',

            title: 'Image Settings',
            onResult: function (id) {
                var data = {};
                var root = $(dialog.dialogContainer);
                root.find('input').each(function () {
                    data[this.name] = this.value;
                })
                saveOptions(id, data);
                this.remove()
            }
        })
    }


    deleteSelected = function () {
        mw.module_pictures.del(doselect());
    }
    downloadSelected = function () {
        mw.$(".admin-thumb-item .mw-ui-check input:checked").each(function () {
            var a = $("<a>")
                .attr("href", $(this).dataset('url'))
                .attr("download", $(this).dataset('url'))
                .appendTo("body");

            a[0].click();
            a.remove();
        });

    }
    doselect = function () {
        var final = [];
        var all = mw.$(".admin-thumb-item:visible")

        all.each(function () {
            var check = $('.mw-ui-check input:checked', this);
            if (check.length) {
                final.push(check[0].value);
                $(this).addClass('checked')
            } else {
                $(this).removeClass('checked');

            }
        });

        var allPicker = mw.$('.post-media-select-all-pictures');

        allPicker[final.length !== 0 ? 'addClass' : 'removeClass']('active').find('span').html(final.length);
        allPicker[final.length === all.length ? 'addClass' : 'removeClass']('all-selected');
        mw.$('#post-media-card-header')[final.length === 0 ? 'removeClass' : 'addClass']('active');
        $(".select_actions")[final.length === 0 ? 'removeClass' : 'addClass']('active');
        $(".select_actions_holder").stop()[final.length === 0 ? 'hide' : 'show']();
        return final;
    }
    editImageTags = function (event) {
        var parent = null;
        mw.tools.foreachParents(event.target, function (loop) {

            if (mw.tools.hasClass(this, 'admin-thumb-item')) {
                parent = this;
                mw.tools.stopLoop(loop);
            }

        });
        if (parent !== null) {
            $(".image-tags", parent).show()
        }

    }



    selectItems = function (val) {
        if (val === 'all') {
            mw.$(".admin-thumb-item .mw-ui-check input").each(function () {
                this.checked = true;
            })
        }
        else if (val === 'none') {
            mw.$(".admin-thumb-item .mw-ui-check input").each(function () {
                this.checked = false;
            })
        }
        doselect()
    }


    $(document).ready(function () {

        var $root = mw.$('#admin-thumbs-holder-sort-63e22cfe713b7');

        mw.require('filepicker.js');

        mw._postsImageUploader = new mw.filePicker({
            element: '#backend_image_uploader_63e22cfe713b7',
            nav: 'dropdown',
            footer: false,
            boxed: false,
            dropDownTargetMode: 'dialog',
            label: mw.lang('Media'),
            _frameMaxHeight: true,
            hideHeader: true,
            uploaderType: "big",
            multiple: true,
            accept: 'image/*',
        })

        mw._postsImageUploader._thumbpreload = function () {
            var el = mw.$('<div class="admin-thumb-item admin-thumb-item-loading"><span class="mw-post-media-img" style=""></span></div>');
            mw.$($root).find('.admin-thumb-item-uploader-holder').before(el);

            mw.spinner({
                element: el,
                size: 32,
                color: '#4592ff'
            });

        }

        $(mw._postsImageUploader).on('FileAdded', function (e, file) {
            mw._postsImageUploader._thumbpreload()
        });
        $(mw._postsImageUploader).on('FileUploaded FileUploadError', function (e, file) {
            mw.$('.admin-thumb-item-loading:last', $root).remove();
            mw.module_pictures.after_change();
        });
        $(mw._postsImageUploader).on('Result', function (e, res) {
            var url = res && res.src ? res.src : res;
            after_upld(url, 'Result', 'content', '39', 'edit-post-gallery-main');
            after_upld(url, 'done');
            if (mw._postsImageUploader.settings.hideHeader) {
                mw._postsImageUploader.hide()
            } else {
                mw._postsImageUploader.hideUploaders()
            }
        });

        var thumbs = mw.$('.admin-thumb-item', $root);

        if (thumbs.length) {
            if (mw._postsImageUploader.settings.hideHeader) {
                mw._postsImageUploader.hide()
            } else {
                mw._postsImageUploader.hideUploaders()
            }
        }


        $(".image-tag-view").remove();
        $(".image-tags").each(function () {
            $(".mw-post-media-img", mw.tools.firstParentWithClass(this, 'admin-thumb-item'))
                .append('<span class="image-tag-view tip" onclick="editImageTags(event)" data-tip="Tags: ' + this.value + '" ><span class="mw-icon-app-pricetag"></span></span>');
            $(this).on('change', function () {
                $(".image-tag-view", mw.tools.firstParentWithClass(this, 'admin-thumb-item')).attr('data-tip', 'Tags: ' + this.value);
            });

        });

        doselect()
    });
</script>
</div>
</div>
        </div>
    </div>

    

    
            <style>
            .fields > .card-body .module > .card {
                background: transparent;
                border: 0;
                box-shadow: unset;
            }

            .fields > .card-body .module > .card > .card-body {
                padding: 0 !important;
            }
            .fields > .card-body .module > .card > .card-header {
                display: none;
            }
        </style>
    <script>
         var variants = ([main, ...[a, ...b]]) => {
             if (!a) return main
             const combined = a.reduce((acc, x) => {
                 return acc.concat(main.map(h => {
                     return [h, x]
                    })
                 )
             }, []).map(node => {
                 var clone = [...node];
                 clone.forEach(nd => {
                     if(Array.isArray(nd)) {
                         nd.forEach(obj => {
                             clone.push(obj);
                         });
                     }
                 })
                 return clone.filter(item => !Array.isArray(item));
             })
             return variants([combined, ...b])
         }
        $(document).ready(function (){
            mw.on('customFieldsRefresh', function (e, data) {
                var fields = data.data.map(function (item){
                    return item.values.map(function (val){
                        return {
                            name: val,
                            customFieldId: item.id
                        }
                    })
                });

            })
        })
    </script>
        <div class="card style-1 mb-3 card-collapse fields js-custom-fields-card-tab">
            <div class="card-header no-border">

                <h6><strong>Custom fields</strong></h6>
                <a href="javascript:;" class="btn btn-link btn-sm js-show-custom-fields" data-bs-toggle="collapse" data-bs-target="#custom-fields-settings"><span class="collapse-action-label">Show</span> Custom fields</a>

            </div>

            <div class="card-body py-0">
                <div class="collapse" id="custom-fields-settings">
                    <div class=" module module-custom-fields-admin " data-mw-title="Custom fields" content-id="39" suggest-from-related="true" list-preview="true" id="fields_for_post_39" parent-module-id="main-content-edit-admin" parent-module="content/edit" data-type="custom_fields/admin">


<div class="card style-1 mb-3 ">
    <div class="card-header">
        <div class=" module module-admin-modules-info-module-title " id="fields-for-post-39-admin-modules-info-module-title" for-module="custom_fields/admin" parent-module-id="fields_for_post_39" parent-module="custom_fields/admin" data-type="admin/modules/info_module_title"><h5>
            <img src="http://localhost:8000/userfiles/modules/custom_fields/custom_fields.svg" class="module-icon-svg-fill">
                <strong>Custom fields</strong>
    </h5>


</div>
    </div>

    <div class="card-body pt-3">
        <div class="settings-wrapper">
            <script type="text/javascript">
                mw.require("custom_fields.js", true);
                mw.require("options.js", true);
                mw.require("admin.js", true);
                mw.require("admin_custom_fields.js", true);
            </script>

            
            <script>


                function addCustomFieldByVal(fieldName) {
                    $('.js-cf-options').val(fieldName);
                    $('.js-cf-options ').trigger('change');
                }


                function addCustomFieldByExisting(fieldId) {

                    var make_field = {}
                    make_field.rel_type = 'content';
                    make_field.rel_id = '39';
                    make_field.copy_of = fieldId;
                    //   mw.custom_fields.copy_field_by_id(fieldId, 'content', '39');

                    mw.custom_fields.create(make_field, mw_custom_fileds_changed_callback);
                    mw_cf_toggle_edit_window()
                    mw.notification.success("Custom fields are saved");
                }


                $(document).ready(function () {
                    mw.dropdown();
                    mw.$('.js-cf-options').on('change', function () {
                        var val = $(this).val();
                        var copyof = mw.$('.js-cf-options li[value="' + val + '"][data-copyof]').dataset('copyof');
                        copyof = false;
                        if (copyof == false) {
                            var make_field = {}
                            make_field.rel_type = 'content';
                            make_field.rel_id = '39';
                            make_field.type = val;
                            mw.custom_fields.create(make_field, mw_custom_fileds_changed_callback);
                            mw_cf_toggle_edit_window()
                            mw.notification.success("Custom fields are saved");
                        } else {

                            // mw.custom_fields.copy_field_by_id(copyof, 'content', '39');
                        }
                    });
                });
                mw_cf_toggle_edit_window = function () {
                    $('#add-field-select').toggleClass('collapse');
                    $(this).parent().toggleClass('card-closed');
                    $(this).find('.d-flex').toggleClass('justify-content-between');
                }
                mw_custom_fileds_changed_callback = function (el) {
                    mw.tools.loading('#quick-add-post-options-items-holder-container');
                    mw.reload_module('#mw_custom_fields_list_preview', function () {
                        mw.admin.custom_fields.initValues();
                        mw.tools.loading('#quick-add-post-options-items-holder-container', false);
                    });
                    mw.custom_fields.after_save();
                }
                if (!!window.thismodal) {
                    thismodal.resize(800)
                }
            </script>

            <div class="module-live-edit-settings">
                <div id="custom-field-editor" class="mw-ui-box mw-ui-box-content" style="display: none">
                    <label class="mw-ui-label">
                        <small>Edit <b id="which_field"></b> Field</small>
                    </label>
                    <div class="custom-field-edit">
                        <div class="custom-field-edit-header">
                            <span class="custom-field-edit-title"></span>
                            <span class="custom-field-edit-title-head right" style="cursor:pointer;">close                                <span class="mw-ui-arr mw-ui-arr-down" style="opacity:0.6;"></span>
                            </span>
                        </div>
                        <div class="mw-admin-custom-field-edit-item-wrapper">
                            <div class="mw-admin-custom-field-edit-item mw-admin-custom-field-edit-fields_for_post_39"></div>
                        </div>
                    </div>
                </div>

                <div>
                    
                    
                    <div>
                        <div class="card mb-3 mt-3 card-closed">
                            <div class="card-header no-border bg-primary text-white py-1 pl-3 js-add-custom-field" style="cursor:pointer" onclick="javascript:mw_cf_toggle_edit_window()">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-plus mdi-20px mr-2"></i>
                                    <span>Add new field</span>
                                </div>
                            </div>
                            <div class="card-body collapse" id="add-field-select">




                                <div class="custom-fields-add-buttons">
                                    
                                    <script>
                                        $(document).ready(function () {
                                            var cf_existing_search_items = mw.$('.mw-custom-field-existing-item-btn', '.custom-fields-add-buttons');

                                            mw.$('#cf-add-existing-search', '.custom-fields-add-buttons').on('input', function () {
                                                mw.tools.search(this.value, cf_existing_search_items, function (found) {
                                                    $(this)[found?'show':'hide']();
                                                });
                                            });
                                        });
                                    </script>

                                        <div class="mw-flex-row">
                                            <div class="mw-flex-col-xs-10 mw-flex-col-sm-6 mw-flex-col-md-8 mw-flex-col-lg-10">
                                                <label class="control-label">Existing fields</label>
                                                <small class="d-block mb-2 text-muted">Choose from your existing fields bellow</small>
                                            </div>
                                            <div class="mw-flex-col-xs-2 mw-flex-col-sm-6 mw-flex-col-md-4 mw-flex-col-lg-2">
                                                <input type="text" class="form-control form-control-sm" aria-label="Search" id="cf-add-existing-search" placeholder="Search">
                                            </div>
                                        </div>






                                    <div class="row">
                                                                                    <button type="button" class="btn btn-link text-dark px-1 mw-custom-field-existing-item-btn" onclick="javascript:addCustomFieldByExisting('53','price');">

                                                    <span class="mw-custom-field-icon-text mw-custom-field-icon-price"></span>
                                                    <span class="mw-custom-field-title  small" title="price">price</span>
                                                    <span class="d-none">price</span>
                                            </button>
                                                                            </div>
                                        <hr>
                                    

                                    <select class="js-cf-options" data-live-search="true" data-size="7" style="display: none;">
                                                                                                                                    <option data-copyof="53" value="price">
                                                    <span class="mw-custom-field-icon-text mw-custom-field-icon-price"></span>
                                                    <span class="mw-custom-field-title" title="price">price</span>
                                                </option>
                                                                                    
                                                                                    <option value="price">
                                                <span class="mw-custom-field-icon-price"></span>
                                                <span class="mw-custom-field-title">Price</span>
                                            </option>
                                                                                    <option value="text">
                                                <span class="mw-custom-field-icon-text"></span>
                                                <span class="mw-custom-field-title">Text Field</span>
                                            </option>
                                                                                    <option value="radio">
                                                <span class="mw-custom-field-icon-radio"></span>
                                                <span class="mw-custom-field-title">Single Choice</span>
                                            </option>
                                                                                    <option value="dropdown">
                                                <span class="mw-custom-field-icon-dropdown"></span>
                                                <span class="mw-custom-field-title">Dropdown</span>
                                            </option>
                                                                                    <option value="checkbox">
                                                <span class="mw-custom-field-icon-checkbox"></span>
                                                <span class="mw-custom-field-title">Multiple choices</span>
                                            </option>
                                                                                    <option value="number">
                                                <span class="mw-custom-field-icon-number"></span>
                                                <span class="mw-custom-field-title">Number</span>
                                            </option>
                                                                                    <option value="phone">
                                                <span class="mw-custom-field-icon-phone"></span>
                                                <span class="mw-custom-field-title">Phone</span>
                                            </option>
                                                                                    <option value="site">
                                                <span class="mw-custom-field-icon-site"></span>
                                                <span class="mw-custom-field-title">Web Site</span>
                                            </option>
                                                                                    <option value="email">
                                                <span class="mw-custom-field-icon-email"></span>
                                                <span class="mw-custom-field-title">E-mail</span>
                                            </option>
                                                                                    <option value="address">
                                                <span class="mw-custom-field-icon-address"></span>
                                                <span class="mw-custom-field-title">Address</span>
                                            </option>
                                                                                    <option value="country">
                                                <span class="mw-custom-field-icon-country"></span>
                                                <span class="mw-custom-field-title">Country</span>
                                            </option>
                                                                                    <option value="date">
                                                <span class="mw-custom-field-icon-date"></span>
                                                <span class="mw-custom-field-title">Date</span>
                                            </option>
                                                                                    <option value="time">
                                                <span class="mw-custom-field-icon-time"></span>
                                                <span class="mw-custom-field-title">Time</span>
                                            </option>
                                                                                    <option value="color">
                                                <span class="mw-custom-field-icon-color"></span>
                                                <span class="mw-custom-field-title">Color</span>
                                            </option>
                                                                                    <option value="upload">
                                                <span class="mw-custom-field-icon-upload"></span>
                                                <span class="mw-custom-field-title">File Upload</span>
                                            </option>
                                                                                    <option value="property">
                                                <span class="mw-custom-field-icon-property"></span>
                                                <span class="mw-custom-field-title">Property</span>
                                            </option>
                                                                                    <option value="breakline">
                                                <span class="mw-custom-field-icon-breakline"></span>
                                                <span class="mw-custom-field-title">Break Line</span>
                                            </option>
                                                                                    <option value="hidden">
                                                <span class="mw-custom-field-icon-hidden"></span>
                                                <span class="mw-custom-field-title">Hidden Field</span>
                                            </option>
                                                                            </select>

                                    <label class="control-label"> Add new fields</label>
                                    <small class="d-block mb-2 text-muted">Add new custom field from list bellow</small>

                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-price" onclick="javascript:addCustomFieldByVal('price');">
                                            <div>
                                                <span class="mw-custom-field-icon-price"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Price</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-text" onclick="javascript:addCustomFieldByVal('text');">
                                            <div>
                                                <span class="mw-custom-field-icon-text"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Text Field</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-radio" onclick="javascript:addCustomFieldByVal('radio');">
                                            <div>
                                                <span class="mw-custom-field-icon-radio"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Single Choice</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-dropdown" onclick="javascript:addCustomFieldByVal('dropdown');">
                                            <div>
                                                <span class="mw-custom-field-icon-dropdown"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Dropdown</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-checkbox" onclick="javascript:addCustomFieldByVal('checkbox');">
                                            <div>
                                                <span class="mw-custom-field-icon-checkbox"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Multiple choices</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-number" onclick="javascript:addCustomFieldByVal('number');">
                                            <div>
                                                <span class="mw-custom-field-icon-number"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Number</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-phone" onclick="javascript:addCustomFieldByVal('phone');">
                                            <div>
                                                <span class="mw-custom-field-icon-phone"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Phone</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-site" onclick="javascript:addCustomFieldByVal('site');">
                                            <div>
                                                <span class="mw-custom-field-icon-site"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Web Site</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-email" onclick="javascript:addCustomFieldByVal('email');">
                                            <div>
                                                <span class="mw-custom-field-icon-email"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">E-mail</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-address" onclick="javascript:addCustomFieldByVal('address');">
                                            <div>
                                                <span class="mw-custom-field-icon-address"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Address</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-country" onclick="javascript:addCustomFieldByVal('country');">
                                            <div>
                                                <span class="mw-custom-field-icon-country"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Country</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-date" onclick="javascript:addCustomFieldByVal('date');">
                                            <div>
                                                <span class="mw-custom-field-icon-date"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Date</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-time" onclick="javascript:addCustomFieldByVal('time');">
                                            <div>
                                                <span class="mw-custom-field-icon-time"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Time</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-color" onclick="javascript:addCustomFieldByVal('color');">
                                            <div>
                                                <span class="mw-custom-field-icon-color"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Color</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-upload" onclick="javascript:addCustomFieldByVal('upload');">
                                            <div>
                                                <span class="mw-custom-field-icon-upload"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">File Upload</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-property" onclick="javascript:addCustomFieldByVal('property');">
                                            <div>
                                                <span class="mw-custom-field-icon-property"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Property</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-breakline" onclick="javascript:addCustomFieldByVal('breakline');">
                                            <div>
                                                <span class="mw-custom-field-icon-breakline"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Break Line</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-hidden" onclick="javascript:addCustomFieldByVal('hidden');">
                                            <div>
                                                <span class="mw-custom-field-icon-hidden"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Hidden Field</span>
                                            </div>
                                        </button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="thin">

                <label class="control-label">Your fields</label>
                <small class="d-block mb-2 text-muted">List of your added custom fields</small>

                <div id="custom-fields-box">
                    
                    <div class=" module module-custom-fields-list " data-type="custom_fields/list" for="content" rel_id="39" list-preview="true" id="mw_custom_fields_list_preview" parent-module-id="fields_for_post_39" parent-module="custom_fields/admin"><script>
    if (typeof __smart_field_opener !== 'function') {
        __smart_field_opener = function (e) {
            if (e === undefined) {
                return;
            }
            if (mw.tools.hasClass(e.target.className, 'mw-ui-field') || mw.tools.hasClass(e.target.className, 'mw-custom-fields-from-page-title-text')) {
                mw.tools.toggle('.custom_fields_selector', '#smart_field_opener');

            }
        }
    }
</script>

<script>mw.lib.require('mwui_init');</script>

    
    <style>
        .mobile-th {
            display: none;
        }

        #custom-fields-post-table [class*='mw-custom-field-icon-'] {
            font-size: 25px;
            display: block;
        }

        #custom-fields-post-table td {
            vertical-align: middle;
        }
    </style>

<script>

    $(document).ready(function (){
        mw.trigger('customFieldsRefresh', {data:  []})
    })

</script>

                </div>
                </div>


            </div>
        </div>

        <div class=" module module-help-modal-with-button " id="fields-for-post-39-help-modal-with-button" for_module="custom_fields" parent-module-id="fields_for_post_39" parent-module="custom_fields/admin" data-type="help/modal_with_button"><script>
    function openModalHelpReadmeMd(for_module = false) {
        var modal_title = 'How to use this module?';

        mw_admin_help_modal = mw.top().dialog({
            content: '<div id="mw_admin_help_modal">Loading...</div>',
            title: modal_title,
            width: 1000,
            height: 700,
            id: 'mw_admin_help_item_popup_modal'
        });

        var params = {}
        params.for_module = for_module;

        mw.top().load_module('help/read', '#mw_admin_help_modal', null, params);
    }
</script>

<a href="javascript:;" onclick="openModalHelpReadmeMd('custom_fields');"><i class="fa fa-info-circle"></i> Help</a>
</div>
    </div>
</div>
</div>
                                    </div>
            </div>
        </div>
    
    <!--
        <div class="card style-1 mb-3">
            <div class="card-body pt-3">
                            </div>
        </div>
    -->
    
    
    <div class=" module module-content-views-advanced-settings " id="main-content-edit-admin-content-views-advanced-settings" content-id="39" content-type="page" subtype="static" parent-module-id="main-content-edit-admin" parent-module="content/edit" data-type="content/views/advanced_settings">    <script type="text/javascript">
        mw.lib.require('mwui_init');
    </script>
    <script type="text/javascript">
        mw.reset_current_page = function (a, callback) {
            mw.tools.confirm("Are you sure you want to Reset the content of this page?  All your text will be lost forever!!", function () {
                var obj = {id: a}
                $.post(mw.settings.site_url + "api/content/reset_edit", obj, function (data) {
                    mw.notification.success("Content was resetted!");

                    if (typeof(mw.edit_content) == 'object') {
                        mw.edit_content.load_editor()
                    }

                    typeof callback === 'function' ? callback.call(data) : '';
                });
            });
        }
        mw.copy_current_page = function (a, callback) {
            mw.tools.confirm("Are you sure you want to copy this page?", function () {
                var obj = {id: a}
                $.post(mw.settings.site_url + "api/content/copy", obj, function (data) {
                    mw.notification.success("Content was copied");
                    if (data != null) {
                        var r = confirm("Go to the new page?");
                        if (r == true) {
                            if (self != top) {
                                top.window.location = mw.settings.site_url + "api/content/redirect_to_content?id=" + data;

                            } else {
                               // mw.url.windowHashParam('action', 'editpage:' + data);
                                window.location = "http://localhost:8000/admin/content/"+data+"/edit";
                            }
                            //content/redirect_to_content_id
                        } else {
                        }
                    }
                    typeof callback === 'function' ? callback.call(data) : '';
                });
            });
        }
        // mw.del_current_page = function (a, callback) {
        //
        //     mw.admin.content.delete(a, function () {
        //         window.location.href = window.location.href;
        //     });
        //
        //
        // }

        mw.adm_cont_type_change_holder_event = function (el) {
            mw.tools.confirm("Are you sure you want to change the content type? Please consider the documentation for more info", function () {
                var root = document.querySelector('#main-content-edit-admin-content-views-advanced-settings');
                var form = mw.tools.firstParentWithClass(root, 'mw_admin_edit_content_form');
                var ctype = $(el).val()
                if (form != undefined && form.querySelector('input[name="content_type"]') != null) {
                    form.querySelector('input[name="content_type"]').value = ctype;
                }
                // Change api post url to content api
                $(form).attr('action', mw.settings.site_url + "api/content/" + form.querySelector('input[name="id"]').value);
                $(form).attr('content-type-is-changed', 1);
            });
        }
        mw.adm_cont_subtype_change_holder_event = function (el) {
            mw.tools.confirm("Are you sure you want to change the content subtype? Please consider the documentation for more info", function () {
                var root = document.querySelector('#main-content-edit-admin-content-views-advanced-settings');
                var form = mw.tools.firstParentWithClass(root, 'mw_admin_edit_content_form');
                var ctype = $(el).val();
                if (form != undefined && form.querySelector('input[name="subtype"]') != null) {
                    form.querySelector('input[name="subtype"]').value = ctype
                }
            });
        }
        mw.adm_cont_enable_edit_of_created_at = function () {
            $('.mw-admin-edit-post-change-created-at-value').removeAttr('disabled').show();
            $('.mw-admin-edit-post-display-created-at-value').remove();
        }

        mw.adm_cont_enable_edit_of_updated_at = function () {
            $('.mw-admin-edit-post-change-updated-at-value').removeAttr('disabled').show();
            $('.mw-admin-edit-post-display-updated-at-value').remove();
        }

        $(document).ready(function (){
            $(".collapse").each(function(){
                var key = 'collapse' + this.id;
                var isStored = mw.storage.get(key);

                var el = $(this);

                el.on('show.bs.collapse', function (){
                    mw.storage.set(key, true);
                    $('[data-bs-target="#'+this.id+'"] .collapse-action-label').html('Hide');
                })
                el.on('hide.bs.collapse', function (){
                    mw.storage.set(key, false);
                    $('[data-bs-target="#'+this.id+'"] .collapse-action-label').html('Show');
                })

                if( isStored ) {
                    el.collapse( 'show' );
                } else {
                    el.collapse( 'hide' );
                }

            });
        })
    </script>


    <div class=" module module-content-views-settings-from-template " id="main-content-edit-admin-content-views-advanced-settings-content-views-settings-from-template" content-type="page" content-id="39" parent-module-id="main-content-edit-admin-content-views-advanced-settings" parent-module="content/views/advanced_settings" data-type="content/views/settings_from_template">
</div>

   

    

    <!-- SEO Settings -->
    <div class="card style-1 mb-3 card-collapse js-card-search-engine">
        <div class="card-header no-border">
            <h6><strong>Search engine</strong></h6>
            <a href="javascript:;" class="btn btn-link btn-sm" data-bs-toggle="collapse" data-bs-target="#seo-settings"><span class="collapse-action-label">Show</span> SEO setttings</a>
        </div>
        <div class="card-body py-0">
            <div class="collapse" id="seo-settings">
                <small class="text-muted d-block">Add a title and description to see how this product might appear in a search engine listing</small>

                <hr class="thin no-padding">

                <div class="row">



                    <div class="col-md-12">
                        <div class="form-group ">
                            <label class="control-label">Meta title</label>
                            <small data-bs-toggle="tooltip" title="Title to appear on the search engines results page"></small>
                            <small class="text-muted d-block mb-2">Title to appear on the search engines results page</small>

                            <input type="text" class="form-control" name="content_meta_title" autocomplete="">                        </div>
                    </div>






                    <div class="col-md-12">
                        <div class="form-group ">
                        <label class="control-label">Meta description</label>
                        <small data-bs-toggle="tooltip" title="Short description for yor content."></small>

                    <textarea class="form-control" name="description" rows="10" cols="50" autocomplete=""></textarea>                        </div>
                    </div>





                    <div class="col-md-12">
                        <div class="form-group ">
                        <label class="control-label">Meta keywords</label>
                        <small data-bs-toggle="tooltip" title="Short description for yor content."></small>
                            <small class="text-muted d-block mb-2">Separate keywords with a comma and space</small>

                    <input type="text" class="form-control" name="content_meta_keywords" autocomplete="">                        </div>

                        <small class="text-muted">Type keywords that describe your content - Example: Blog, Online News, Phones for Sale etc</small>

                    </div>










                    <div class="col-md-12">
                        <div class="form-group ">
                            <label>OG Images</label>
                            <small class="text-muted d-block mb-2">
                                Those images will be shown as a post image at facebook shares.<br>
                                If you want to attach og images, you must upload them to gallery from 'Add media'.
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Advanced Settings -->
    <div class="card style-1 mb-3 card-collapse">
        <div class="card-header no-border">
            <h6><strong>Advanced settings</strong></h6>
            <a href="javascript:;" class="btn btn-link btn-sm" data-bs-toggle="collapse" data-bs-target="#advanced-settings"><span class="collapse-action-label">Show</span>  advanced settings</a>
        </div>

        <div class="card-body py-0">
            <div class="collapse" id="advanced-settings">
                <p>Use the advanced settings to customize your blog post</p>
                <hr class="thin no-padding">
                <div class="row">
                    <div class="col-md-12">
                        
                        <div class="form-group">
                            <label>Redirect to URL</label>
                            <small class="text-muted d-block mb-2">If set this, the user will be redirected to the new URL when visits the page</small>
                            <input type="text" name="original_link" class="form-control" placeholder="http://yoursite.com" value="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Require login</label>
                            <small class="text-muted d-block mb-2">If set to yes - this page will require login from a registered user in order to be opened</small>
                            <div class="custom-control custom-switch pl-0">
                                <label class="d-inline-block mr-5" style="cursor:pointer" for="require_login">No</label>
                                <input type="checkbox" class="custom-control-input" style="cursor:pointer" id="require_login" name="require_login" data-value-checked="1" data-value-unchecked="0">
                                <label class="custom-control-label" style="cursor:pointer" for="require_login">Yes</label>
                            </div>
                        </div>
                    </div>
                                            <div class="col-md-12">
                            <div class="form-group">
                                <label>Author</label>

                                <div id="select-post-author"></div>

                                <script>mw.require('autocomplete.js')</script>
                                                                <script>
                                    $(document).ready(function () {
                                        var created_by_field = new mw.autoComplete({
                                            element: "#select-post-author",
                                            ajaxConfig: {
                                                method: 'get',
                                                url: mw.settings.api_url + 'users/search_authors?kw=${val}',
                                                cache: true
                                            },
                                            map: {
                                                value: 'id',
                                                title: 'display_name',
                                                image: 'picture'
                                            },
                                            selected: [
                                                {
                                                    id: 1,
                                                    display_name: 'admin'
                                                }
                                            ]
                                        });
                                        $(created_by_field).on("change", function (e, val) {
                                            $("#created_by").val(val[0].id).trigger('change')
                                        })
                                    });
                                </script>
                                <input type="hidden" name="created_by" id="created_by" value="1">
                            </div>
                        </div>
                                    </div>
                <hr class="thin no-padding">
                <!-- More Advanced Settings -->
                
                <script>
                    // open_edit_related_content_modal = function($content_id) {
                    //     open_edit_related_content_modal__modal_opened = mw.dialog({
                    //      //   height:'600px',
                    //        //   autoHeight : true,
                    //
                    //         content: '<div id="open_edit_related_content_modal__opened__module" style="min-height: 500px"></div>',
                    //         title: 'Edit related content',
                    //         id: 'open_edit_related_content_modal__modal'
                    //     });
                    //
                    //     var params = {}
                    //     params.content_id = $content_id;
                    //   //  params.id = 'mw-admin-select-related-content-list';
                    //     mw.load_module('content/views/related_content_list', '#open_edit_related_content_modal__opened__module', null, params);
                    // }
                    open_edit_related_content_modal = function($content_id) {
                        var modal_id = 'open_edit_related_content_modal__modal';
                        var dialog = mw.top().dialogIframe({
                            url: 'http://localhost:8000/module/?type=content/views/related_content_list&live_edit=true&id=open_edit_related_content_modal__opened__module&content_id='+$content_id+'&from_url=http://localhost:8000/',
                            title: 'Edit related content',
                            id: modal_id,

                            height: 'auto',
                            autoHeight: true
                        })
                    }
                </script>
                <div class="row d-flex align-items-center">
                    <div class="col-md-8">
                        <label class="control-label">Related Content:</label>
                        <small class="text-muted d-block mb-3">You can add related content to your post or product</small>
                        <a class="btn btn btn-outline-primary btn-sm" href="javascript:open_edit_related_content_modal('39');">Edit related</a>
                    </div>
                        <div class="col-md-4 text-center text-md-right">
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col-md-12 text-center text-md-left">
                        <label class="control-label mt-3">More options:</label>
                        <small class="text-muted d-block mb-3">Choose more options</small>
                        <a class="btn btn-outline-primary btn-sm" href="javascript:mw.copy_current_page('39');">Duplicate</a> 
                        <a class="btn btn-outline-primary btn-sm" href="javascript:mw.reset_current_page('39');">Reset Content</a>

                    </div>




                </div>

                
                                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Is Home</label>
                                <small class="text-muted d-block mb-2">If yes this page will be your Home</small>
                                <div class="custom-control custom-switch pl-0">
                                    <label class="d-inline-block mr-5" for="is_home">No</label>
                                    <input type="checkbox" name="is_home" class="custom-control-input" id="is_home" data-value-checked="1" data-value-unchecked="0">
                                    <label class="custom-control-label" for="is_home">Yes</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Is Shop</label>
                                <small class="text-muted d-block mb-2">If yes this page will accept products to be added to it</small>
                                <div class="custom-control custom-switch pl-0">
                                    <label class="d-inline-block mr-5" for="is_shop">No</label>
                                    <input type="checkbox" name="is_shop" class="custom-control-input" id="is_shop" data-value-checked="1" data-value-unchecked="0">
                                    <label class="custom-control-label" for="is_shop">Yes</label>
                                </div>
                            </div>
                        </div>
                    </div>
                
                
                                

                


                                            <div class="row  mt-3">
                        <div class="col-md-12">
                            <div>
                                <small>
                                    Id: <span class="mw-admin-edit-post-display-id-at-value">39</span>

                                </small>
                            </div>
                        </div>


                        </div>
                    




                    <div class="row  ">




                        <div class="col-12">


                            <button type="button" class="btn btn-sm btn-link" data-bs-toggle="collapse" data-bs-target="#set-a-specific-publish-date">Set a specific publish date</button>





                            <div class="collapse" id="set-a-specific-publish-date">
                                <div class="row">
                                    <script>mw.lib.require('bootstrap_datetimepicker');</script>
                                    <script>
                                        $(function () {
                                            $('.mw-admin-edit-post-change-created-at-value').datetimepicker();
                                            $('.mw-admin-edit-post-change-updated-at-value').datetimepicker();
                                        });
                                    </script>


                                                                            <div class="col-md-12">
                                            <div class="mw-admin-edit-post-created-at" onclick="mw.adm_cont_enable_edit_of_created_at()">
                                                <small>
                                                    Created on: <span class="mw-admin-edit-post-display-created-at-value">2022-04-19 12:05:44</span>
                                                    <input class="form-control form-control-sm mw-admin-edit-post-change-created-at-value" style="display:none" type="text" name="created_at" value="2022-04-19 12:05:44">
                                                </small>
                                            </div>
                                        </div>
                                    
                                                                            <div class="col-md-12">
                                            <div class="mw-admin-edit-post-updated-at" onclick="mw.adm_cont_enable_edit_of_updated_at()">
                                                <small>
                                                    Updated on: <span class="mw-admin-edit-post-display-updated-at-value">2022-04-19 12:05:44</span>
                                                    <input class="form-control form-control-sm mw-admin-edit-post-change-updated-at-value" style="display:none" type="text" name="updated_at" value="2022-04-19 12:05:44">
                                                </small>
                                            </div>
                                        </div>
                                                                    </div>
                            </div>
                        </div>
                    </div>
                




                                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="mw-ui-field-holder"><br>
                                <span class="font-weight-bold">Content type:  </span>

                                <button class="btn btn-outline-warning btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#content-type-settings">page</button>

                                <div class="collapse" id="content-type-settings">
                                    <div class="alert alert-dismissible alert-warning mt-3">
                                        <h4 class="alert-heading">Warning!</h4>
                                        <p class="mb-0">Do not change these settings unless you know what you are doing.</p>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>
                                                Change content type                                                <small data-bs-toggle="tooltip" data-title="Changing the content type to different than 'page' is advanced action. Please read the documentation and consider not to change the content type"></small>
                                            </label>

                                            <select class="selectpicker dropup" data-dropup-auto="false" data-width="100%" name="change_content_type" onchange="mw.adm_cont_type_change_holder_event(this)">
                                                                                                    <option value="page" selected>page</option>
                                                                                                    <option value="post">post</option>
                                                                                                    <option value="product">product</option>
                                                                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>
                                                Change content sub type                                                <small data-bs-toggle="tooltip" data-title="Changing the content type to different than 'static' is advanced action. Please read the documentation and consider not to change the content type"></small>
                                            </label>

                                            <select class="selectpicker dropup" data-dropup-auto="false" data-width="100%" name="change_contentsub_type" onchange="mw.adm_cont_subtype_change_holder_event(this)">
                                                                                                    <option value="dynamic">dynamic</option>
                                                                                                    <option value="post">post</option>
                                                                                                    <option value="product">product</option>
                                                                                                    <option value="static" selected>static</option>
                                                                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                





            </div>
        </div>
    </div>
    






    
        <div class="alert alert-danger" role="alert">


            <a class="btn btn-outline-danger btn-sm" id="mw-admin-content-edit-inner-delete-curent-content-btn" href="javascript:mw.del_current_page('39');">Delete Content</a>

        </div>


    


<script>
    mw.del_current_page = function (a, callback) {
        mw.admin.content.delete(a, function () {
            window.location.href = window.location.href;
        });
    }

    mw.del_current_page_forever = function (a, callback) {
        mw.admin.content.deleteForever(a, function () {
            window.location.href = window.location.href;
        });
    }


    mw.del_current_page_restore = function (a, callback) {
        mw.admin.content.restoreFromTrash(a, function () {
            window.location.href = window.location.href;
        });
    }
</script>





</div>
    

    <div class="mt-9">
        <!--  -->
    </div>

</div>


<script>
    $(document).ready(function () {

        pick1 = mw.colorPicker({
            element: '.mw-ui-color-picker',
            position: 'bottom-left',
            onchange: function (color) {

            }
        });

        setTimeout(function (){
            mw.askusertostay = false;
          //  document.querySelector('.js-bottom-save').disabled = true;
        }, 999)

    });
</script>
                    </div>

                    
                    <script>
    mw.require("content.js");
    mw.require("files.js");
    mw.require("admin_custom_fields.js");
</script>
<script>
    /* FUNCTIONS */

    if (self !== parent && !!parent.mw) {

        mw.top().win.iframe_editor_window = window.self;
    }


    mw.edit_content = {};

    mw.edit_content.saving = false;


    mw.edit_content.create_new = function () {
        mw.$('#main-content-edit-admin').attr("content-id", "0");
        mw.$('#main-content-edit-admin').removeAttr("just-saved");
        mw.reload_module('#main-content-edit-admin');
    };

    mw.edit_content.close_alert = function () {
        mw.$('#quickform-edit-content').show();
        mw.$('#post-added-alert-529996765').hide();

    };

    mw.edit_content.load_page_preview = function (element_id) {
        var element_id = element_id || 'mw-admin-content-iframe-editor';
        var parent_page = mw.$('#mw-parent-page-value-529996765', '#main-content-edit-admin').val();
        var content_id = mw.$('#mw-content-id-value', '#main-content-edit-admin').val();
        var content_type = mw.$('#mw-content-type-value-529996765', '#main-content-edit-admin').val()
        var subtype = mw.$('#mw-content-subtype', '#main-content-edit-admin').val();
        var subtype_value = mw.$('#mw-content-subtype-value-529996765', '#main-content-edit-admin').val();
        var active_site_template = $('#mw-active-template-value-529996765', '#main-content-edit-admin').val();
        var active_site_layout = $('#mw-layout-file-value-529996765').val();
        // var name = 'content/views/edit_default_inner';
        var name = 'content/views/layout_selector';
        var selector = '#mw-admin-edit-content-main-area';


        var callback = false;
        var attributes = {}
        attributes.parent_page = parent_page;
        attributes.content_id = content_id;
        attributes.content_id = content_id;
        attributes.content_type = content_type;
        attributes.subtype = subtype;
        attributes.subtype_value = subtype_value;
        attributes.active_site_template = active_site_template;
        attributes.active_site_layout = active_site_layout;
        attributes['template-selector-position'] = 'none';
        attributes['live-edit-overlay'] = true;
        attributes['edit_page_id'] = content_id;
        mw.load_module(name, selector, callback, attributes);
    }


    mw.edit_content.load_editor = function (element_id) {

        var parent_page = mw.$('#mw-parent-page-value-529996765', '#main-content-edit-admin').val();
        var content_id = mw.$('#mw-content-id-value', '#main-content-edit-admin').val();
        var content_type = mw.$('#mw-content-type-value-529996765', '#main-content-edit-admin').val()
        var subtype = mw.$('#mw-content-subtype', '#main-content-edit-admin').val();
        var subtype_value = mw.$('#mw-content-subtype-value-529996765', '#main-content-edit-admin').val();
        var active_site_template = $('#mw-active-template-value-529996765', '#main-content-edit-admin').val();
        var active_site_layout = $('#mw-layout-file-value-529996765').val();
        var name = 'content/views/edit_default_inner';
        var selector = '#mw-admin-edit-content-main-area';


        var callback = false;
        var attributes = {}
        attributes.parent_page = parent_page;
        attributes.content_id = content_id;
        attributes.content_type = content_type;
        attributes.subtype = subtype;
        attributes.subtype_value = subtype_value;
        attributes.active_site_template = active_site_template;
        attributes.active_site_layout = active_site_layout;
        mw.load_module(name, selector, callback, attributes);
    }
    mw.edit_content.before_save = function () {
        mw.askusertostay = false;
        if (window.parent != undefined && window.parent.mw != undefined) {
            window.mw.parent().askusertostay = false;
        }
    }
    mw.edit_content.after_save = function (saved_id) {
        var saved_id = typeof saved_id === "number" ? saved_id : saved_id.id;

        mw.askusertostay = false;
        mw.$('.post-header-content-changed').removeClass('post-header-content-changed')
        var content_id = mw.$('#mw-content-id-value').val();
        var quick_add_holder = document.getElementById('mw-quick-content');
        if (quick_add_holder != null) {
            mw.tools.removeClass(quick_add_holder, 'loading');
        }
        if (content_id == 0) {
            if (saved_id !== undefined) {
                mw.$('#mw-content-id-value').val(saved_id);
            }
                    }
        if (mw.notification != undefined) {
            mw.notification.success('Content saved!');
        }



        if (parent !== self && !!parent.mw) {

            mw.reload_module_everywhere('content/views/edit_default_sidebar_variants');
            mw.reload_module_everywhere('posts');
            mw.reload_module_everywhere('shop/products');
            mw.reload_module_everywhere('shop/cart_add');
            mw.reload_module_everywhere('pages');
            mw.reload_module_everywhere('content');
            mw.reload_module_everywhere('custom_fields');
            mw.reload_module_everywhere('content/manager');
            mw.reload_module_everywhere('content/manager');
            mw.reload_module_everywhere('shop');

            mw.tools.removeClass(document.getElementById('mw-quick-content'), 'loading');
            mw.parent().askusertostay = false;
        } else {
            mw.reload_module('[data-type="pages"]', function () {
                if (mw.$("#pages_tree_toolbar .mw_del_tree_content").length === 0) {
                    mw.$("#pages_tree_toolbar").removeClass("activated");
                    var action = mw.url.windowHashParam('action');
                    if (action) {
                        var id = action.split(':')[1];
                        if (id) {
                            $('[data-page-id="' + id + '"]').addClass("active-bg")
                        }
                    }


                }
                mw.tools.removeClass(document.getElementById('mw-quick-content'), 'loading');
            });
        }
    }

    mw.edit_content.set_category = function (id) {
        /* FILLING UP THE HIDDEN FIELDS as you change category or parent page */
        var names = [];
        var inputs = document.getElementById(id).querySelectorAll('input[type="checkbox"]'), i = 0, l = inputs.length;
        for (; i < l; i++) {
            if (inputs[i].checked === true) {
                names.push(inputs[i].value);
            }
        }
        if (names.length > 0) {
            mw.$('#mw_cat_selected_for_post').val(names.join(',')).trigger("change");
        } else {
            mw.$('#mw_cat_selected_for_post').val('__EMPTY_CATEGORIES__').trigger("change");
        }
        var names = [];
        var inputs = document.getElementById(id).querySelectorAll('input[type="radio"]'), i = 0, l = inputs.length;
        for (; i < l; i++) {
            if (inputs[i].checked === true) {
                names.push(inputs[i].value);
            }
        }
        if (names.length > 0) {
            mw.$('#mw-parent-page-value-529996765').val(names[0]).trigger("change");
        } else {
            mw.$('#mw-parent-page-value-529996765').val(0).trigger("change");
        }
    }


     mw.edit_content.handle_form_submit = function (go_live) {


        if (mw.edit_content.saving) {
            return false;
        }
        mw.edit_content.saving = true;
        var go_live_edit = go_live || false;
        var el = document.getElementById('quickform-edit-content');
        if (el === null) {
            return;
        }

        mw.edit_content.before_save();
        var module = $(mw.tools.firstParentWithClass(el, 'module'));


        var data = mw.serializeFields(el);
        data.id = mw.$('#mw-content-id-value').val();

        var categories = [];


        if (window.categorySelector) {
            $.each(categorySelector.tree.selectedData, function () {
                if (this.type == 'category') {
                    categories.push(this.id);
                }
                if (this.type == 'page') {
                    data.parent = this.id;
                }
            });
        }


        if (categories.length) {
            data.category_ids  = categories.join(',')
        } else {
            data.category_ids = 0;

        }

         var has_menu_edit = document.getElementById('menu-selector-item');
         if (has_menu_edit !== null &&  !data['add_content_to_menu[]'] ) {
              data['add_content_to_menu[]'] = [0];
         }





         //
        // if (data.tag_names.length) {
        //     data.tag_names  = data.tag_names.join(',')
        // } else {
        //     data.tag_names = false;
        // }


        module.addClass('loading');


        mw.content.save(data, {
            url: el.getAttribute('action'),
            onSuccess: function (a) {
                if (window.pagesTreeRefresh) {
                    pagesTreeRefresh()
                }

                if (typeof(data.id) !== 'undefined') {
                mw.$('.mw-admin-go-live-now-btn').attr('content-id', data.id);
                }
                mw.askusertostay = false;
                mw.is_new_content_added = false;
                if ( typeof(data.id) !== 'undefined' && (data.id) == 0) {
                    mw.is_new_content_added = true;
                }
                if (parent !== self && !!window.parent.mw) {
                    window.mw.parent().askusertostay = false;
                    if (typeof(data.is_active) !== 'undefined' && typeof(data.id) !== 'undefined') {

                        if ((data.id) != 0) {
                            if ((data.is_active) == 0) {
                                window.mw.parent().$('.mw-set-content-unpublish').hide();
                                window.mw.parent().$('.mw-set-content-publish').show();
                            }
                            else if ((data.is_active) == 1) {
                                window.mw.parent().$('.mw-set-content-publish').hide();
                                window.mw.parent().$('.mw-set-content-unpublish').show();
                            }
                        }

                    }
                }

                if (typeof(this) != "undefined") {
                    var inner_edits = mw.collect_inner_edit_fields();

                    if (inner_edits !== false) {
                        var save_inner_edit_data = inner_edits;
                        save_inner_edit_data.id = this;

                        var xhr = mw.save_inner_editable_fields(save_inner_edit_data);
                        xhr.success(function () {
                            mw.trigger('adminSaveEnd');
                        });
                        xhr.fail(function () {
                            $(window).trigger('adminSaveFailed');
                        });

                    }
                }
                if (go_live_edit != false) {
                    if (parent !== self && !!window.parent.mw) {
                        if (window.mw.parent().drag != undefined && window.mw.parent().drag.save != undefined) {
                            window.mw.parent().drag.save();
                        }
                        window.mw.parent().askusertostay = false;
                    }
                    var nid = typeof this === "number" ? this : this.id;

                    $.get('http://localhost:8000/api/content/get_link_admin/?id=' + nid, function (data) {

                        if (data == null) {
                            return false;
                        }
                         if(go_live_edit === 'n'){
                        mw.top().win.location.href = data.url + '?editmode=n';
                        } else {
                        mw.top().win.location.href = data.url + '?editmode=y';
                        }
                    });
                }
                else {
                    var nid = typeof this === "number" ? this : this.id;
                     $.get('http://localhost:8000/api/content/get_link_admin/?id=' + nid, function (data) {

                        if (data == null) {
                            return false;
                        }

                        var slug = data.slug;
                        mw.$("#edit-content-url").val(slug);
                        mw.$(".view-post-slug").html(slug);
                        mw.$("#slug-base-url").html(data.slug_prefix_url);
                         if(go_live_edit === 'n') {
                             mw.$("a.quick-post-done-link").attr("href", data.url + '?editmode=n');
                         } else {
                             mw.$("a.quick-post-done-link").attr("href", data.url + '?editmode=y');

                         }
                        mw.$("a.quick-post-done-link").html(data.url);



                         mw.$("#main-content-edit-admin").attr("content-id", nid);
                                                  //if (self === parent) {
                         if (self === parent) {

                             if(mw.is_new_content_added){
                                 window.location = data.admin_url;
                             }
                             //var type =  el['subtype'];
                             // mw.url.windowHashParam("action", "editpage:" + nid);
                             // window.location = window.location;
                         }
                         
                         if ($('.mw_admin_edit_content_form').attr('content-type-is-changed') == 1) {
                             location.reload();
                             // This will redirect the full page with the new content type fields and changes
                         }
                         mw.edit_content.after_save(this);

                    });

                }
                mw.edit_content.saving = false;


                $(window).trigger('adminSaveContentCompleted');

                if (self !== parent) {



                    if ((data.id) == 0) {



                        var nid = typeof this === "number" ? this : this.id;


                        mw.$("#main-content-edit-admin").attr("content-id", nid);

                        mw.reload_module("#main-content-edit-admin");

                        mw.reload_module_everywhere('menu');
                        mw.reload_module_everywhere('pages');
                        mw.reload_module_everywhere('posts');
                        mw.reload_module_everywhere('shop/products');


                    }
                }






            },
            onError: function () {
                $(window).trigger('adminSaveFailed');
                module.removeClass('loading');

                mw.edit_content.saving = false;
            }
        });
    }

    mw.collect_inner_edit_fields = function (data) {
        var frame = document.querySelector('#mw-admin-content-iframe-editor iframe');
        if (frame === null) return false;
        var frameWindow = frame.contentWindow;
        if (typeof(frameWindow.mwd) === 'undefined') return false;
        var root = frameWindow.document.getElementById('mw-iframe-editor-area');
        var data = frameWindow.mw.drag.getData(root);
        return data;
    }

    mw.save_inner_editable_fields = function (data) {
        var xhr = $.ajax({
            type: 'POST',
            url: mw.settings.site_url + 'api/save_edit',
            data: data,
            datatype: "json"
        });
        return xhr;
    }


    /* END OF FUNCTIONS */
</script>

<script>
    $(mwd).ready(function () {
        $("#quickform-edit-content").on('keydown', "input[type='text']", function (e) {
            if (e.keyCode == 13) {
                e.preventDefault()
            }
        })
        $(window).on('hashchange beforeunload', function (e) {
            mw.$(".mw-admin-go-live-now-btn").off('click');
        });


        mw.$(".mw-admin-go-live-now-btn").off('click');

        mw.$(".mw-admin-go-live-now-btn").on('click', function (e) {
            mw.edit_content.handle_form_submit(true);
            return false;
        });

        mw.reload_module('#edit-post-gallery-main');

        mw.edit_content.load_editor();
                // mw.edit_content.render_category_tree("529996765");
        mw.$("#quickform-edit-content").submit(function () {
            mw.edit_content.handle_form_submit();
            return false;
        });
                mw.$(".mw-admin-go-live-now-btn").attr('content-id', 39);
                mw.$('#mw-parent-page-value-529996765').on('change', function (e) {
            var iframe_ed = $('.mw-iframe-editor');


            var changed = iframe_ed.contents().find('.changed').size();
            if (changed == 0) {

                mw.edit_content.load_editor();
            }
            //mw.edit_content.load_editor();
        });
        $(window).on('templateChanged', function (e) {

            var iframe_ed = $('.mw-iframe-editor')
            var changed = iframe_ed.contents().find('.changed').size();
            if (changed == 0) {
                // mw.edit_content.load_editor();
            }
            mw.edit_content.load_editor();
        });
        if (document.querySelector('.mw-iframe-editor') !== null) {
            document.querySelector('.mw-iframe-editor').onload = function () {
                $(window).on('scroll', function () {
                    var scrolltop = $(window).scrollTop();
                    if (document.getElementById('mw-edit-page-editor-holder') !== null) {
                        var otop = document.getElementById('mw-edit-page-editor-holder').offsetTop;
                        if ((scrolltop + 100) > otop) {
                            var ewr = document.querySelector('.mw-iframe-editor').contentWindow.document.querySelector('.editor_wrapper');
                            if (ewr === null) {
                                return false;
                            }
                            ewr.style.position = 'absolute';
                            ewr.style.top = scrolltop + otop + 'px';
                            ewr.style.top = scrolltop - otop /*+ document.querySelector('.admin-manage-toolbar').offsetTop*/ + document.querySelector('.admin-manage-toolbar').offsetHeight - 98 + 'px';
                            mw.$('.admin-manage-toolbar-scrolled').addClass('admin-manage-toolbar-scrolled-wysiwyg');
                            mw.tools.addClass(ewr, 'editor_wrapper_fixed');
                        }
                        else {
                            var ewr = document.querySelector('.mw-iframe-editor').contentWindow.document.querySelector('.editor_wrapper');
                            if (ewr === null) {
                                return false;
                            }
                            ewr.style.position = 'static';
                            mw.$('.admin-manage-toolbar-scrolled').removeClass('admin-manage-toolbar-scrolled-wysiwyg');
                            mw.tools.removeClass(ewr, 'editor_wrapper_fixed');
                        }
                    }
                });
            }
        }

        var title_field_shanger = $('#content-title-field');

        if (title_field_shanger.length > 0) {
            $(title_field_shanger).unbind("change");
            $(title_field_shanger).on("change", function () {
                var newtitle = $(this).val();
                $('#content-title-field-master').val(newtitle);
            });
        }

        $(".postbtnmore").on('mousedown', function () {
            $(this).remove()
        })

        window.QTABS = mw.tabs({
            nav: mw.$("#quick-add-post-options .mw-ui-abtn"),
            tabs: mw.$("#quick-add-post-options-items-holder .quick-add-post-options-item"),
            toggle: true,
            onclick: function (qtab) {

                var tabs = $(document.getElementById('quick-add-post-options-items-holder'));
                if (mw.$("#quick-add-post-options .mw-ui-abtn.active").length > 0) {
                    var tabsnav = $(document.getElementById('quick-add-post-options'));
                    var off = tabsnav.offset();
                    $(tabs).show();
                    QTABMaxHeight();
                }
                else {
                    $(tabs).hide();
                }
                if (qtab.id === 'post-gallery-manager') {
                    $(qtab).width(mw.$("#mw-edit-page-editor-holder").width())
                } else if (qtab.id === 'quick-add-post-options-item-template') {
                    mw.reload_module('#mw-quick-add-choose-layout');
                }


                try {
                    document.querySelector('.mw-iframe-editor').contentWindow.GalleriesRemote()
                } catch (err) {
                }

            }
        });

        QTABMaxHeight = function () {
            var qt = mw.$('#quick-add-post-options-items-holder-container'),
                wh = $(window).height(),
                st = $(window).scrollTop();
            if (qt.length == 0) {
                return false;
            }
            qt.css('maxHeight', (wh - (qt.offset().top - st + 20)));
            qt.css('width', ($(".admin-manage-content-wrap").width()));
        }

        $(mww).on('mousedown', function (e) {
            var el = document.getElementById('content-edit-settings-tabs-holder');
            var cac = mw.wysiwyg.validateCommonAncestorContainer(e.target);
            if (el != null && !el.contains(e.target)
                && !!cac
                && !mw.tools.hasParentsWithTag(e.target, 'grammarly-btn')
                && cac.className.indexOf('grammarly') !== -1
                && cac.querySelector('[class*="grammarly"]') === null
                && !mw.tools.hasParentsWithTag(e.target, 'grammarly-ghost')
                && !mw.tools.hasParentsWithTag(e.target, 'grammarly-card')) {
                window.QTABS.unset()
                mw.$(".quick-add-post-options-item, #quick-add-post-options-items-holder").hide();
                mw.$("#quick-add-post-options .active").removeClass('active');
            }
        });

        mw.$(".mw-iframe-editor").on("editorKeyup", function () {
            mw.tools.addClass(document.body, 'editorediting');
        });
        $(document.body).on("mousedown", function () {
            mw.tools.removeClass(document.body, 'editorediting');
        });
        mw.$(".admin-manage-toolbar").on("mousemove", function () {
            mw.tools.removeClass(document.body, 'editorediting');
        });



    });
</script>
                </div>
            </div>

                <script>
        $(document).ready(function () {
            $('.go-live-edit-href-set').attr('href', 'http://localhost:8000/contact-us?editmode=y');
            $('.go-live-edit-href-set-view').attr('href', 'http://localhost:8000/contact-us?editmode=n');
        });
    </script>

<style>
    #quick-parent-selector-tree .mw-tree-nav{
        margin: 0;
        padding: 10px 0 0 20px;
        border-radius: 3px;
        max-height: calc(100vh - 100px);
        overflow: auto;
    }

</style>

<script>

    var loadCategoriesTree = function () {
        var request = new XMLHttpRequest();
        request.open('GET', 'http://localhost:8000/api/content/get_admin_js_tree_json', true);
        request.send();
        request.onload = function() {
            if (request.status >= 200 && request.status < 400) {
                var tdata = JSON.parse(request.responseText);

                if(!tdata || !tdata.length){
                    tdata = [];
                }

                var selectedPages = [ 0];
                var selectedCategories = [ ];



                var tags = mw.element();
                var tree = mw.element();

                mw.element('.post-category-tags').empty().append(tags)
                mw.element('#quick-parent-selector-tree').empty().append(tree)



                window.categorySelector = new mw.treeTags({
                    data: tdata,
                    selectable: true,
                    multiPageSelect: false,
                    tagsHolder: tags.get(0),
                    treeHolder: tree.get(0),
                    color: 'primary',
                    size: 'sm',
                    outline: true,
                    saveState: false,
                    on: {
                        selectionChange: function () {
                            //  document.querySelector('.btn-save').disabled = false;
                            mw.askusertostay = true;

                            var selected = categorySelector.tree.getSelected();
                            if(selected.length){
                                var hasPage = selected.find(function (item){
                                    return item.type === 'page';
                                });

                                if(typeof hasPage === 'undefined'){
                                    var category = selected[0];
                                    categorySelector.tree.select(category.parent_id, 'page', true);
                                }
                             }

                        }
                    }
                });

                $(categorySelector.tree).on('ready', function () {
                    if (window.pagesTree && pagesTree.selectedData.length) {
                        $.each(pagesTree.selectedData, function () {
                            categorySelector.tree.select(this, undefined, false)
                        })
                    } else {

                        $.each(selectedPages, function () {
                            categorySelector.tree.select(this, 'page', false);

                        });
                        $.each(selectedCategories, function () {
                            categorySelector.tree.select(this, 'category', false);
                        });

                    }
                    categorySelector.tags.setData(categorySelector.tree.getSelected());

                    var atcmplt = mw.element('<div class="input-group mb-0 prepend-transparent"> <div class="input-group-prepend"> <span class="input-group-text px-1"><i class="mdi mdi-magnify"></i></span> </div> <input type="text" class="form-control form-control-sm" placeholder= Search> </div>');

                    tree.before(atcmplt);

                    atcmplt.find('input').on('input', function () {
                        var val = this.value.toLowerCase().trim();
                        if (!val) {
                            categorySelector.tree.showAll();
                        }
                        else {
                            categorySelector.tree.options.data.forEach(function (item) {

                                if (item.title.toLowerCase().indexOf(val) === -1) {
                                    categorySelector.tree.hide(item);
                                }
                                else {
                                    categorySelector.tree.show(item);
                                }
                            });
                        }
                    });
                    $('.mw-page-component-disabled').removeClass('mw-page-component-disabled');
                });

                $(categorySelector.tags).on("tagClick", function (e, data) {
                    $(".mw-tree-selector").show();
                    mw.tools.highlight(categorySelector.tree.get(data))
                });

            }
        }

    }
    var catManager;
    var addCategory = function () {
        if(!catManager) {
            catManager = new mw.CategoryManager();
        }
        catManager.addNew().then(function (data){
            loadCategoriesTree()
        })
    }


</script>

<div class="col-md-4 manage-content-sidebar">
    <div class="card style-1 mb-3">
        <div class="card-body pt-3 pb-0">
            <div class="row">
                <div class="col-12">
                    <strong>Visibility</strong>
                </div>
            </div>

            <div class="row my-3">
                <div class="col-12"><input type="hidden" name="is_active" id="is_post_active" value="1">
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="is_active_1" name="is_active" class="custom-control-input" value="1" checked>
                            <label class="custom-control-label" style="cursor:pointer" for="is_active_1">Published</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="is_active_0" name="is_active" class="custom-control-input" value="0">
                            <label class="custom-control-label" style="cursor:pointer" for="is_active_0">Unpublished</label>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class=" module module-content-views-edit-default-sidebar-variants " id="main-content-edit-admin-content-views-edit-default-sidebar-variants" content-id="39" parent-module-id="main-content-edit-admin" parent-module="content/edit" data-type="content/views/edit_default_sidebar_variants">
</div>

    <div class="card style-1 mb-3 categories js-sidebar-categories-card">
            <div class="card-body pt-3 pb-1">
                <div class="row">


                                            <div class="col-12">
                            <strong>Select parent page</strong>

                            <div class="quick-parent-selector mt-2">
                                <div class=" module module-content-views-selector " id="main-content-edit-admin-content-views-selector" no-parent-title="No parent page" field-name="parent_id_selector" change-field="parent" selected-id="0" remove_ids="39" parent-module-id="main-content-edit-admin" parent-module="content/edit" data-type="content/views/selector">


<div id="tree-item-selector-63e22cfe8aedd"></div>

<script>

    ;(function (){
        function tree() {
            var selected = [];
            mw.admin.tree('#tree-item-selector-63e22cfe8aedd', {
                options: {
                    disableSelectTypes: ['category']
                },
                params: {
                    content_type: 'page',
                    exclude_ids: '39'
                }
            }).then(function (res){
                res.tree.select(0, 'page');
                res.tree.on('selectionChange', function (res){
                                        var val = res[0] ? res[0].id : '0';
                    mw.$('#parent').val(val).trigger("change");
                    mw.$('[name="parent"]').val(val).trigger("change");
                                    });
                $('.mw-page-component-disabled').removeClass('mw-page-component-disabled');
            });
        }
        if (document.readyState !== 'loading') {
            tree();
        } else {
            document.addEventListener('DOMContentLoaded', function () {
                tree();
            });
        }
    })();
</script>
</div>
                            </div>
                        </div>
                                    </div>


                <div class="row mb-3">
                    <div class="col-12">
                                            </div>
                </div>

                            </div>
        </div>

            <div class="card style-1 mb-3 menus">
            <div class="card-body pt-3">
                
                                    <div class=" module module-menu " id="main-content-edit-admin-menu" data-mw-title="Menu" view="edit_page_menus" content_id="39" parent-module-id="main-content-edit-admin" parent-module="content/edit" data-type="menu">

<div class="row mb-3">
    <div class="col-12">
        <strong>Add to Navigation</strong>
    </div>
</div>

<div class="position-relative" id="menu-selector-item">
            <div id="mw-menu-selector-list-63e22cfe8e71a" class="mw-menu-selector-list">
                            <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input id="menuid-1" class="custom-control-input" name="add_content_to_menu[]" checked value="1" type="checkbox" data-menu-key="header_menu">
                        <label class="custom-control-label" for="menuid-1">Header Menu</label>
                    </div>
                </div>
                            <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input id="menuid-3" class="custom-control-input" name="add_content_to_menu[]" checked value="3" type="checkbox" data-menu-key="footer_menu">
                        <label class="custom-control-label" for="menuid-3">Footer Menu</label>
                    </div>
                </div>
                            <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input id="menuid-5" class="custom-control-input" name="add_content_to_menu[]" value="5" type="checkbox" data-menu-key="footer_menu_1">
                        <label class="custom-control-label" for="menuid-5">Footer Menu 1</label>
                    </div>
                </div>
                            <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input id="menuid-24" class="custom-control-input" name="add_content_to_menu[]" value="24" type="checkbox" data-menu-key="footer_menu_2">
                        <label class="custom-control-label" for="menuid-24">Footer Menu 2</label>
                    </div>
                </div>
                            <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input id="menuid-25" class="custom-control-input" name="add_content_to_menu[]" value="25" type="checkbox" data-menu-key="footer_menu_3">
                        <label class="custom-control-label" for="menuid-25">Footer Menu 3</label>
                    </div>
                </div>
                            <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input id="menuid-26" class="custom-control-input" name="add_content_to_menu[]" value="26" type="checkbox" data-menu-key="footer_menu_4">
                        <label class="custom-control-label" for="menuid-26">Footer Menu 4</label>
                    </div>
                </div>
                            <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input id="menuid-27" class="custom-control-input" name="add_content_to_menu[]" value="27" type="checkbox" data-menu-key="footer_menu_5">
                        <label class="custom-control-label" for="menuid-27">Footer Menu 5</label>
                    </div>
                </div>
                            <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input id="menuid-28" class="custom-control-input" name="add_content_to_menu[]" value="28" type="checkbox" data-menu-key="footer_menu_6">
                        <label class="custom-control-label" for="menuid-28">Footer Menu 6</label>
                    </div>
                </div>
                            <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input id="menuid-29" class="custom-control-input" name="add_content_to_menu[]" value="29" type="checkbox" data-menu-key="footer_menu_8">
                        <label class="custom-control-label" for="menuid-29">Footer Menu 8</label>
                    </div>
                </div>
                            <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input id="menuid-30" class="custom-control-input" name="add_content_to_menu[]" value="30" type="checkbox" data-menu-key="footer_menu_9">
                        <label class="custom-control-label" for="menuid-30">Footer Menu 9</label>
                    </div>
                </div>
                            <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input id="menuid-62" class="custom-control-input" name="add_content_to_menu[]" value="62" type="checkbox" data-menu-key="footer_menu_bottom">
                        <label class="custom-control-label" for="menuid-62">Footer Menu Bottom</label>
                    </div>
                </div>
                    </div>

            </div>
</div>
                
                            </div>
        </div>
    
    

    <div class="card style-1 mb-3 d-none">
        <div class="card-body">
            <div id="content-title-field-buttons">
                                    <button type="submit" class="btn btn-primary mw-live-edit-top-bar-button" onclick="mw.edit_content.handle_form_submit(true);" form="quickform-edit-content"><i class="mai-eye2"></i> <span>Live Edit</span></button>
                            </div>
        </div>
    </div>
</div>
        </div>
    </form>
</div>

<script>
    addEventListener('load', function (){
        mw.element('.mw_admin_edit_content_form [name]').on('input', function (){
            contentChanged(true)
        });
    });
</script>
  </div>
</div>
        
        
        <div class="row copyright mt-3">
    <div class="col-12">
        <p class=" text-muted text-center small ">  <span class="mw-powered-by"><a href="https://microweber.org/" title="Website Builder">Website Builder</a> by <a href="https://microweber.org" target="_blank" title="Make a website">Microweber</a></span>   Version:  1.3.2 </p>
    </div>
</div>

    </main>



            </div>
            <!--  /.main.container -->
        </div>
        <!--  /#mw-admin-main-block -->
    </body>
</html>
