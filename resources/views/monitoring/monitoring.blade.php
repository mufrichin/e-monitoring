@extends('panel.app')

@section('menu-1','active')

@section('title','E-Monitoring')

@section('content')

<div class="content">
	<div class="container-fluid">
		<div class="row">
			
		</div>
	</div>
</div>

@endsection

@section('style')

    <script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

            $.notify({
                icon: 'ti-face-smile',
                message: "Selamat Datang di E-Monitoring Kinerja - Universitas Negeri Malang."

            },{
                type: 'success',
                timer: 1000
            });

        });
    </script>

@endsection