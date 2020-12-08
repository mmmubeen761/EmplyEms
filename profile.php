<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="row my-2">
            <div class="col-lg-8 order-lg-2">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Edit</a>
                    </li>
                </ul>
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="tab-pane active" id="profile">
                        <h5 class="mb-3">User Profile</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>About</h6>

                                <h4>Name:</h4>
                                <p>
                                    Web Designer, UI/UX Engineer
                                </p>
                                <h6>Hobbies</h6>
                                <p>
                                    Indie music, skiing and hiking. I love the great outdoors.
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h6>Recent badges</h6>
                                <a href="#" class="badge badge-dark badge-pill">html5</a>
                                <a href="#" class="badge badge-dark badge-pill">react</a>
                                <a href="#" class="badge badge-dark badge-pill">codeply</a>
                                <a href="#" class="badge badge-dark badge-pill">angularjs</a>
                                <a href="#" class="badge badge-dark badge-pill">css3</a>
                                <a href="#" class="badge badge-dark badge-pill">jquery</a>
                                <a href="#" class="badge badge-dark badge-pill">bootstrap</a>
                                <a href="#" class="badge badge-dark badge-pill">responsive-design</a>
                                <hr>
                                <span class="badge badge-primary"><i class="fa fa-user"></i> 900 Followers</span>
                                <span class="badge badge-success"><i class="fa fa-cog"></i> 43 Forks</span>
                                <span class="badge badge-danger"><i class="fa fa-eye"></i> 245 Views</span>
                            </div>
                            <div class="col-md-12">
                                <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> Recent Activity</h5>
                                <table class="table table-sm table-hover table-striped">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <strong>Abby</strong> joined ACME Project Team in <strong>`Collaboration`</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Gary</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Kensington</strong> deleted MyBoard3 in <strong>`Discussions`</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>John</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-lg-1 text-center">
                <img src="//placehold.it/150" class="mx-auto img-fluid img-circle d-block" alt="avatar">
                <h6 class="mt-2">Upload a different photo</h6>
                <label class="custom-file">
                    <input type="file" id="file" class="custom-file-input">
                    <span class="custom-file-control">Choose file</span>
                </label>
            </div>
        </div>
    </div>


</body>

</html>