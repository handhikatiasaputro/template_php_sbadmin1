<?php 
include '../inc/header.php';
include '../inc/sidebar.php';
?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Form Vertical</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Form Vertical</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form>
                                    <!-- Nama Lengkap -->
                                    <div class="form-group">
                                        <label for="namaLengkap">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="namaLengkap">
                                    </div>
                        
                                    <!-- Email Address -->
                                    <div class="form-group">
                                        <label for="emailAddress">Email address</label>
                                        <input type="email" class="form-control" id="emailAddress">
                                        <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                        
                                    <!-- Password -->
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password">
                                    </div>
                        
                                    <!-- File Upload -->
                                    <div class="form-group">
                                        <label for="fileUpload">File</label>
                                        <input type="file" class="form-control-file" id="fileUpload">
                                    </div>
                        
                                    <!-- Checkbox -->
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                            checkbox 1
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                            <label class="form-check-label" for="defaultCheck2">
                                            checkbox 2
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                                            <label class="form-check-label" for="defaultCheck3">
                                            checkbox 3
                                            </label>
                                          </div>
                                    </div>
                        
                                    <!-- Radio Buttons -->
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                            radio 1
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>
                                            <label class="form-check-label" for="exampleRadios2">
                                            radio 2
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" checked>
                                            <label class="form-check-label" for="exampleRadios3">
                                            radio 3
                                            </label>
                                          </div>
                                    </div>
                        
                                    <!-- Textarea -->
                                    <div class="form-group">
                                        <label for="textArea">Textarea</label>
                                        <textarea class="form-control" id="textArea" rows="3"></textarea>
                                    </div>
                        
                                    <!-- Select -->
                                    <div class="form-group">
                                        <label for="selectOption">Select</label>
                                        <select class="form-control" id="selectOption">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                            <option>Option 5</option>
                                        </select>
                                    </div>
                        
                                    <!-- Multiselect -->
                                    <div class="form-group">
                                        <label for="multiSelect">Multiselect</label>
                                        <select id="multiSelect" class="form-control" multiple>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                        
                                    <!-- Input dengan Addons -->
                                    <div class="form-group">
                                        <label for="inputAddons">Input dengan addons</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">@</span>
                                            </div>
                                            <input type="text" class="form-control" id="inputAddons" placeholder="Username">
                                        </div>
                                    </div>
</main>

<?php
include '../inc/footer.php';
?>
                        