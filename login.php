<?php
require './header.php';
?>
<style>
    .row {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 150px;
    }

    form {
        background: rgba(255, 255, 255, 0.5);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(5.5px);
        -webkit-backdrop-filter: blur(5.5px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.18);
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row-lg">
                    <form style="padding:20px;margin-top:50px;border-radius:6px;">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>