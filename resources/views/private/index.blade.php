<x-layout>
    <div id="app">
        <!-- Page Title Header Starts-->
        <div class="row page-title-header">
            <div class="col-12">
                <div class="page-header">
                    <h4 class="page-title">Beranda</h4>
                </div>
            </div>
        </div>
        <!-- Page Title Header Ends-->
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-2">
                            Selamat datang {{ Auth::User()->name ?? '' }}
                        </div>
                        <div class="mb-2">
                            Anda login dari {{ $_SERVER['HTTP_HOST'] }}
                        </div>
                        <div>
                            <strong>{{ Carbon\Carbon::now('Asia/Kuala_Lumpur')->format('l, d F Y | H:i A') }}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
