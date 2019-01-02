@extends ('data.periode.panel')

@section ('title', 'Input Data Periode')

@section ('periode')
<div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="content">
                                <form method="POST">
                                	@csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="kode">Kode</label>
                                                <input type="text" class="form-control border-input" required="" disabled placeholder="kode" name="kode" value="PER-01">
                                            </div>
                                        </div>
                                    </div>
                                        
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="periode">Periode</label>
                                                <input type="text" class="form-control border-input" name="periode" required=""placeholder="Nama Periode">
                                            </div>
                                        </div>
                                        </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <textarea rows="4" class="form-control border-input" placeholder="Penjelasan Periode" name="keterangan_periode" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Tambah Data</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
@endsection