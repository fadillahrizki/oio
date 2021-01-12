<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OIO</title>
    <?php wp_head() ?>
</head>

<body>

    <nav class="navbar navbar-light navbar-expand-lg bg-white sticky-top">
        <div class="container-fluid cf2">
            <a class="navbar-brand text-danger" href="#">OIO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="ms-auto" id="search">
                    <form class="input-group">
                        <input type="text" placeholder="Search by city, hotel, etc" name="city" class="form-control form-control-lg" value="Jakarta" onfocus="this.value=''">
                        <input type="text" value="Sun, 3 Jan - Mon, 4 Jan" name="dates" class="form-control form-control-lg">
                        <input type="text" value="1 Room, 2 Guest" name="room" class="form-control form-control-lg room-field" id="dd-room-btn" readonly>
                        <div class="dropdown-menu" id="dd-room">
                            <div class="d-flex justify-content-between px-4 py-3">
                                <b>Rooms</b>
                                <b>Guests</b>
                            </div>
                            <div class="dropdown-divider"></div>

                            <div class="items">
                                <div class="d-flex align-items-center justify-content-between px-4 py-3 item">
                                    <span>Room <b class="room">1</b></span>
                                    <div class="d-flex align-items-center">
                                        <button onclick="minGuest(this,event)">-</button>
                                        <p class="my-0 mx-3 guest">2</p>
                                        <button onclick="plusGuest(this,event)">+</button>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-divider"></div>

                            <div class="d-flex justify-content-between px-4 py-3 btns">
                                <span onclick="delRoom()">Delete Room</span>
                                <span onclick="addRoom()">Add Room</span>
                            </div>
                        </div>
                        <button class="btn btn-success">Search</button>
                    </form>
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="" class="nav-item nav-link">
                        <ion-icon name="logo-whatsapp"></ion-icon> <b>Book now at +62 2129707600</b>
                    </a>
                    <a href="" class="nav-item nav-link">
                        <ion-icon name="person-circle-outline"></ion-icon> <b>Login / Signup</b>
                    </a>
                </div>
            </div>
        </div>
    </nav>