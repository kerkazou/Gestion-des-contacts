    <!-- Modal Add contacts -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light" id="staticBackdropLabel">Add Contact</h4>
                    <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="container" method="POST" action="add_contact.php">
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <input class="form-control mb-3" name="username" type="text" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control mb-3" name="phone"type="text" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Phone</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control mb-3" name="email" type="text" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Adress email</label>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" name="adress" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Adress...</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <input class="btn btn-outline-secondary" type="submit" name="add_contact" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edite contacts -->
    <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light" id="staticBackdropLabel">Edit Contact</h4>
                    <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <form method="POST" class="container" action="edite_contact.php">
                        <div class="modal-body">
                            <input class="form-control mb-3 id" name="idc" type="hidden">
                            <div class="form-floating mb-3">
                                <input class="form-control mb-3 username" name="username_e" type="text" required id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control mb-3 phone"  name="phone_e"type="text" required id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Phone</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control mb-3 email"  name="email_e" type="text" required id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Adress email</label>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control adress" name="adress_e" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Adress...</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                            <input class="btn btn-outline-secondary" type="submit" name="edite_contact" value="Submit">
                        </div>
                    </form>
            </div>
        </div>
    </div>

    <!-- Modal Delete contacts -->
    <div class="modal fade" id="deletModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light" id="staticBackdropLabel">Delete Contact</h4>
                    <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <form method="POST" class="container" action="delete_contact.php">
                        <div class="modal-body">
                            <input class="form-control mb-2 id" name="idc" type="hidden">
                            <h5 class="text-danger text-center my-3">Are you sure you want to delete ?</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                            <input class="btn btn-outline-secondary" type="submit" name="delete_contact" value="Delete">
                        </div>
                    </form>
            </div>
        </div>
    </div>