@extends ('data.sasaran.panel')

@section ('title', 'Input Data Sasaran Strategis')

@section ('sasaran')
<div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="content">
                                <form method="POST">
                                	@csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="kode">Kode</label>
                                                <input type="text" class="form-control border-input" required="" disabled placeholder="kode" name="kode" value="STR-01">
                                            </div>
                                        </div>
                                    </div>
                                        
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="sasaran">Sasaran Strategis</label>
                                                <input type="text" class="form-control border-input" name="sasaran" required=""placeholder="Nama Sasaran Strategis">
                                            </div>
                                        </div>
                                        </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Penjelasan</label>
                                                <textarea rows="4" class="form-control border-input" placeholder="Penjelasan Sasaran Strategis" name="penjelasan_sasaran" required=""></textarea>
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