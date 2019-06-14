@extends('template')
@section('main-dashboard')
<!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <!-- <div class="col-md-12">
                        <div class="alert alert-danger" role="alert">
                          <h4 class="alert-heading">SIDESKEL</h4>
                          <p class="text-dark">1 Batas Berhasil ditambahkan</p>
                        </div>
                    </div> -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">PENDUDUK</strong>
                                <a href="" class="btn btn-info btn-sm float-right"> KEMBALI </a>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <!-- <div id="pay-invoice"> -->
                                <div class="card-body" style="padding-top: 0">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <label class="control-label">NIK</label>
                                            <input type="text" class="form-control" placeholder="1234567890123456">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Nama</label>
                                            <input type="text" class="form-control" placeholder="Adnan Kasim">
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label mb-1">Alamat</label>
                                            <textarea rows="2" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label mb-1">Status Menikah</label>
                                            <select class="form-control">
                                                <option>-- Status Menikah --</option>
                                                <option>Sudah</option>
                                                <option>Belum</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Tempat Lahir</label>
                                            <input type="text" class="form-control" placeholder="Tobelo">
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label mb-1">Tanggal Lahir</label>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Pekerjaan</label>
                                            <input type="text" class="form-control" placeholder="PNS">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Agama</label>
                                            <input type="text" class="form-control" placeholder="Islam">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Pendidikan Terakhir</label>
                                            <input type="text" class="form-control" placeholder="S3">
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label mb-1">Golongan Darah</label>
                                            <select class="form-control">
                                                <option>-- Golongan Darah --</option>
                                                <option>A</option>
                                                <option>B</option>
                                                <option>AB</option>
                                                <option>O</option>
                                            </select>
                                        </div>
                                        <div class="form-group has-success">
                                            <label>Foto</label>
                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input">
                                                    <label class="custom-file-label">Cari Foto</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <button id="payment-button" type="submit"
                                                class="btn btn-primary">SUBMIT</button>
                                            <input type="reset" class="btn btn-danger" value="RESET">
                                        </div>
                                    </form>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-4">
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> Desa Kayu Bulan, Gorontalo
                    </div>
                    <div class="col-sm-4 text-center">
                        SIDESKEL Development by. <strong> <a href="#">Adnan Kasim</a></strong>
                    </div>
                    <div class="col-sm-4 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->
@stop