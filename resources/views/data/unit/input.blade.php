@extends ('data.unit.panel')

@section ('title', 'Input Data Unit Kerja')

@section ('unit')
<div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="content">
                                <form method="POST">
                                	@csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="kode_unit">Kode Unit</label>
                                                <input type="text" class="form-control border-input" name="kode_unit" required=""placeholder="Kode Unit, contoh : PTIK">
                                            </div>
                                        </div>
                                    </div>
                                        
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="nama_unit">Nama Unit</label>
                                                <input type="text" class="form-control border-input" name="nama_unit" required=""placeholder="Nama Unit, contoh : Pusat Teknologi Informasi dan Komunikasi">
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