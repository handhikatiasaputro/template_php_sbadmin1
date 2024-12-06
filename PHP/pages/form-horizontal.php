<?php
include '../inc/header.php';
include '../inc/sidebar.php';
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Form Horizontal</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form>

                                  <!-- input nama -->
                                    <div class="form-group row">
                                      <label for="inputNama3" class="col-sm-2 col-form-label">Nama</label>
                                      <div class="col-sm-10">
                                        <input type="Nama" class="form-control" id="inputNama3">
                                      </div>
                                    </div>

                                    <!-- input email -->
                                    <div class="form-group row">
                                      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                      <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3">
                                      </div>
                                    </div>

                                    <!-- input password -->
                                    <div class="form-group row">
                                      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                      <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword3">
                                      </div>
                                    </div>

                                    <!-- file -->
                                    <div class="form-group row">
                                        <label for="fileUpload" class="col-sm-2 col-form-label">File</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control-file" id="fileUpload">
                                        </div>
                                    </div>

                                    <!-- radio -->
                                    <div class="form-group row">
                                      <div class="col-form-label col-sm-2">Radios</div>
                                      <div class="col-sm-10">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                          <label class="form-check-label" for="gridRadios1">
                                            First radio
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                          <label class="form-check-label" for="gridRadios2">
                                            Second radio
                                          </label>
                                        </div>
                                        <div class="form-check disabled">
                                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                                          <label class="form-check-label" for="gridRadios3">
                                            Third disabled radio
                                          </label>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- checkbox -->
                                    <div class="form-group row">
                                      <div class="col-form-label col-sm-2">Checkbox</div>
                                      <div class="col-sm-10">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="gridcheckboxs" id="gridcheckboxs1" value="option1" checked>
                                          <label class="form-check-label" for="gridcheckboxs1">
                                            First checkbox
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="gridcheckboxs" id="gridcheckboxs2" value="option2">
                                          <label class="form-check-label" for="gridcheckboxs2">
                                            Second checkbox
                                          </label>
                                        </div>
                                        <div class="form-check disabled">
                                          <input class="form-check-input" type="checkbox" name="gridcheckboxs" id="gridcheckboxs3" value="option3" disabled>
                                          <label class="form-check-label" for="gridcheckboxs3">
                                            Third disabled radio
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <div class="col-sm-10 offset-sm-2">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="gridCheck1">
                                          <label class="form-check-label" for="gridCheck1">
                                            Example checkbox
                                          </label>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- textarea -->
                                    <div class="form-group row">
                                        <label for="inputtextarea3" class="col-sm-2 col-form-label">Textarea</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="textArea" rows="3"></textarea>
                                        </div>
                                      </div>

                                      <!-- select -->
                                    <div class="form-group row">
                                        <label for="inputSelection3" class="col-sm-2 col-form-label">Selection</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" id="selectOption">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                        </div>
                                      </div>
                                    
                                    <!--  Multiselect -->
                                    <div class="form-group row">
                                        <label for="multiSelect" class="col-sm-2 col-form-label">Multiselect</label>
                                        <div class="col-sm-10">
                                            <select id="multiSelect" class="form-control" multiple>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                        
                                    <!--  Input dengan addons -->
                                    <div class="form-group row">
                                        <label for="inputAddons" class="col-sm-2 col-form-label">Input dengan addons</label>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">@</span>
                                                </div>
                                                <input type="text" class="form-control" id="inputAddons" placeholder="Username">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                      <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                      </div>
                                    </div>
                                  </form>
                            </div>
                        </div>
                    </div>
                </main>
<?php include '../inc/footer.php';?>
