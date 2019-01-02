@extends ('data.indikator.panel')

@section ('title', 'Input Data Indikator Kinerja')

@section ('indikator')
<div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="content">
                                <form method="POST">
                                	@csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="kode">Kode</label>
                                                <input type="text" class="form-control border-input" required="" disabled placeholder="kode" name="kode" value="IND-01">
                                            </div>
                                        </div>
                                    </div>
                                        
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="indikator">Indikator Kinerja</label>
                                                <input type="text" class="form-control border-input" name="indikator" required=""placeholder="Nama Indikator Kinerja">
                                            </div>
                                        </div>
                                        </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="sasaran">Sasaran Strategis</label>

                                        <!-- Dropdown List from data Sasaran Strategis -->

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <textarea rows="4" class="form-control border-input" placeholder="Penjelasan Indikator Kinerja" name="keterangan_indikator" required=""></textarea>
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