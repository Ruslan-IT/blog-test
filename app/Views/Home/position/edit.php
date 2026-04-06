<body id="body">
<!-- leftbar-tab-menu -->
<?php include __DIR__ . "../../../layouts/leftbar.php"; ?>
<!-- end leftbar-tab-menu-->

<!-- Top Bar Start -->
<!-- Top Bar Start -->
<?php include __DIR__ . "../../../layouts/topbar.php"; ?>
<!-- Top Bar End -->
<!-- Top Bar End -->
<style>
    .table-responsive {
        overflow-x: unset!important;
        -webkit-overflow-scrolling: touch;
    }
    .row, input{
        font-weight: bold;
    }

</style>
<div class="page-wrapper">

    <!-- Page Content-->
    <div class="page-content-tab">

        <div class="container-fluid">



            <!-- Page-Title -->
            <div class="row">
                <div style="padding: 0 20px; " class="col-12">
                    <br>
                    <?php include __DIR__ . "../../../layouts/message.php"; ?>
                    <div class="page-title-box card-body">
                        <div class="float-end">

                            <ol class="breadcrumb">

                                <li class="breadcrumb-item active"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;"></font></font></li>
                            </ol>
                        </div>
                        <h4 class="page-title"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">Редактировать позицию</font></font></h4>


                        <div class="">
                            <!-- <a href="position/create" type="button" id="step1Next" class="btn btn-primary float-end">
                                 Создать
                             </a>-->
                        </div>
                        <br>

                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row" style="margin: 20px 0 0 0;">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">

                                <form action="/position/update" method="POST">
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label text-end"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">Текст</font></font></label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="title" value="<?=$data['title']?>" type="text" placeholder="Введите название позицию" id="example-text-input">
                                            <input type="hidden" name="id" value="<?=$data['id']?>">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 text-end">
                                            <button type="submit" class="btn btn-de-primary px-4"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">Изменить</font></font></button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div class="row">

                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->

        </div><!-- container -->

        <!--Start Rightbar-->
        <!--Start Rightbar/offcanvas-->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
            <div class="offcanvas-header border-bottom">
                <h5 class="m-0 font-14" id="AppearanceLabel"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">Появление</font></font></h5>
                <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Закрывать"></button>
            </div>
            <div class="offcanvas-body">
                <h6><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">Настройки учетной записи</font></font></h6>
                <div class="p-2 text-start mt-3">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch1">
                        <label class="form-check-label" for="settings-switch1"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">Автоматические обновления</font></font></label>
                    </div><!--end form-switch-->
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch2" checked="">
                        <label class="form-check-label" for="settings-switch2"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">Разрешение на определение местоположения</font></font></label>
                    </div><!--end form-switch-->
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="settings-switch3">
                        <label class="form-check-label" for="settings-switch3"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">Показать контакты в автономном режиме</font></font></label>
                    </div><!--end form-switch-->
                </div><!--end /div-->
                <h6><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">Общие настройки</font></font></h6>
                <div class="p-2 text-start mt-3">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch4">
                        <label class="form-check-label" for="settings-switch4"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">Показать мне онлайн</font></font></label>
                    </div><!--end form-switch-->
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch5" checked="">
                        <label class="form-check-label" for="settings-switch5"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">Статус виден всем</font></font></label>
                    </div><!--end form-switch-->
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="settings-switch6">
                        <label class="form-check-label" for="settings-switch6"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">Всплывающее окно уведомлений</font></font></label>
                    </div><!--end form-switch-->
                </div><!--end /div-->
            </div><!--end offcanvas-body-->
        </div>
        <!--end Rightbar/offcanvas-->
        <!--end Rightbar-->

        <!--Start Footer-->
        <!-- Footer Start -->
        <footer class="footer text-center text-sm-start"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">
                    © </font></font><script>
                document.write(new Date().getFullYear())
            </script><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">2026 Metrica</font></font><span class="text-muted d-none d-sm-inline-block float-end"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">Создано с помощью</font></font><i class="mdi mdi-heart text-danger"></i><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">Автор: Mannatthemes</font></font></span>
        </footer>
        <!-- end Footer -->
        <!--end footer-->
    </div>
    <!-- end page content -->

</div>





</body>
