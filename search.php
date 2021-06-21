<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">

<!-- Serach section -->
<div class="container d-flex justify-content-center">
    <input type="hidden" id="base_url" value="<?=base_url()?>">
    <div class="card mt-5 p-4">
        <div class="input-group mb-3"> <input type="text" placeholder="search.." class="form-control" id="search"
                name="search" autocomplete="off"><i class="fas fa-search"></i><br>
            <ul id="stock_list">
            </ul>
            <div class="input-group-append">
            </div>
            <br>
        </div>
    </div>
</div>

                                                                                <!-- To display the company details -->
<div class="container-fluid bg-3 text-center" id="result" style="display:none">
    <h2 id="name">cococola</h2>
    <div class="row">
        <div class="col-sm-3">
            <span>Current Market Price : </span> <span class="result_val" id="current_m_price"></span>
        </div>
        <div class="col-sm-3">
            <span>Market Cap : </span> <span class="result_val" id="marcket_cap"></span>
        </div>
        <div class="col-sm-3">
            <span>Stock P/E : </span> <span class="result_val" id="stock_p"></span>
        </div>
        <div class="col-sm-3">
            <span>ROCE % : </span> <span class="result_val" id="rose_perce"></span>
        </div>
        <div class="col-sm-3">
            <span>ROE Previous Annum : </span> <span class="result_val" id="roe"></span>
        </div>
        <div class="col-sm-3">
            <span>Debt to Equity : </span> <span class="result_val" id="debt_to_qty"></span>
        </div>
        <div class="col-sm-3">
            <span>EPS : </span> <span class="result_val" id="eps"></span>
        </div>
        <div class="col-sm-3">
            <span>Reserves : </span> <span class="result_val" id="reserves"></span>
        </div>
        <div class="col-sm-3">
            <span>Debt : </span> <span class="result_val" id="debt"></span>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?=base_url()?>assets/js/custum.js"></script>