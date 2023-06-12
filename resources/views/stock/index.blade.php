<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <title>Document</title>
    <style>
        body {
    margin-top: 20px;
    background: #FFF5EE;
}

.card {
    box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
}

.avatar.sm {
    width: 2.25rem;
    height: 2.25rem;
    font-size: .818125rem;
}

.table-nowrap .table td,
.table-nowrap .table th {
    white-space: nowrap;
}

.table>:not(caption)>*>* {
    padding: 0.75rem 1.25rem;
    border-bottom-width: 1px;
}

table th {
    font-weight: 600;
    background-color: #eeecfd !important;
}

.fa-arrow-up {
    color: #00CED1;
}

.fa-arrow-down {
    color: #FF00FF;
}
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 mb-3 mb-lg-5">
            <div class="position-relative card table-nowrap table-card">
                <div class="card-header align-items-center">
                    <h5 class="mb-0">Latest Transactions</h5>
                    <p class="mb-0 small text-muted">1 Pending</p>
                </div>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="small text-uppercase bg-body text-muted">
                            <tr>
                                <th>Transaction ID</th>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="align-middle">
                                <td>
                                    #57473829
                                </td>
                                <td>13 Sep, 2021</td>
                                <td>Renee Sims</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span><i class="fa fa-arrow-up" aria-hidden="true"></i></span>
                                        <span>$145</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge fs-6 fw-normal bg-tint-success text-success">Completed</span>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>
                                    #012458780
                                </td>
                                <td>19 Aug, 2021</td>
                                <td>Edith Koenig</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
                                        <span>$641.64</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge fs-6 fw-normal bg-tint-warning text-warning">Pending</span>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>
                                    #76444326
                                </td>
                                <td>03 April, 2021</td>
                                <td>Carrie Blount</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
                                        <span>$12,457</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge fs-6 fw-normal bg-tint-success text-success">Completed</span>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>
                                    #12498745
                                </td>
                                <td>15 March, 2021</td>
                                <td>Ander Durham</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
                                        <span>$785</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge fs-6 fw-normal bg-tint-success text-success">Completed</span>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>
                                    #87444654
                                </td>
                                <td>23 Jan, 2021</td>
                                <td>Netflix Inc.</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span><i class="fa fa-arrow-up" aria-hidden="true"></i></span>
                                        <span>$199</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge fs-6 fw-normal bg-tint-success text-success">Completed</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-end">
                    <a href="#!" class="btn btn-gray">View All Transactions</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>