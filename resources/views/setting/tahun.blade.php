@extends ('setting.setting')

@section ('set')
<div class="col-lg-12 col-md-12">
    <div class="card">
       <div class="header">
            <h4 class="title"><b>Ubah Tahun</b></h4>
                            </div>
                            <div class="content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="set_tahun"><br>Set Tahun saat ini : </label>
                                                <h3>2018</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <form method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="nama_unit">Ubah Tahun</label>
                                                <select class="select form-control border-input"  id="set_tahun" name="set_tahun" required="">
                                                 <option value="">Pilih Tahun</option>
                                                 <?php
                                                 $thn_skr = date('Y');
                                                 for ($x = $thn_skr; $x >= 2018; $x--) {
                                                  ?>
                                                  <option value=" {{$x}} ">{{$x}}</option>
                                                  <?php
                                                }
                                                ?>
                                              </select>
                                            </div>
                                        </div>
                                        </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Update</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
@endsection