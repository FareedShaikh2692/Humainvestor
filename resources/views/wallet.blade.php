<body class="homepage">
    @include('header')
    <div class="container mt-3">
        <h3 class="d-flex justify-content-center">My wallet</h3>
        <h4 class="d-flex justify-content-center">Vinod</h4>
        <h4 class="d-flex justify-content-center">Total value: 72,15 $</h4>
    </div>
    <hr>
    <div class="container">
        <h3 class="d-flex justify-content-center">My stocks/ Securities value</h3>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">Stocks/Securities</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Unit Value</th>
                    <th scope="col">Total Value</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>demo1</td>
                    <td>4</td>
                    <td>2 $</td>
                    <td>8 $</td>
                    <td><button type="button" class="btn btn-primary">put on sale</button></td>
                </tr>
                <tr>
                    <td>demo2</td>
                    <td>10</td>
                    <td>4 $</td>
                    <td>40 $</td>
                    <td><button type="button" class="btn btn-primary">put on sale</button></td>
                </tr>
                <tr>
                    <td>demo3</td>
                    <td>7</td>
                    <td>345 $</td>
                    <td>2415 $</td>
                    <td><button type="button" class="btn btn-primary">put on sale</button></td>
                </tr>
            </tbody>
        </table>
    </div>