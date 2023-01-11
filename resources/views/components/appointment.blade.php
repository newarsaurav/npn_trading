<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex justify-content-center">
            <div class="col-md-12">
                <div class="wrap-appointment bg-white d-md-flex pl-md-4 pb-5 pb-md-0">
                    <form id="appointment_form" class="appointment w-100 appointment_form" >
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-12 col-md d-flex align-items-center pt-4 pt-md-0">
                                <div class="form-group py-md-4 py-2 px-4 px-md-0">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-12 col-md d-flex align-items-center">
                                <div class="form-group py-md-4 py-2 px-4 px-md-0">
                                    <label for="name">Phone number</label>
                                    <input type="text" name="phone_number" class="form-control" placeholder="Phone number">
                                </div>
                            </div>
                            <div class="col-12 col-md d-flex align-items-center">
                                <div class="form-group py-md-4 py-2 px-4 px-md-0">
                                    <label for="name">Select Services</label>
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="service" id="" class="form-control">
                                                <option value="">Select Services</option>
                                                <option value="Cleaning">Cleaning </option>
                                                <option value="Demolision">Demolision</option>
                                                <option value="Waste Management">Waste Management</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md d-flex align-items-center pb-4 pb-md-0">
                                <div class="form-group py-md-4 py-2 px-4 px-md-0">
                                    <label for="name">Name</label>
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="cleaner" id="" class="form-control">
                                                <option value="">Select Cleaners</option>
                                                <option value="John Doe">John Doe</option>
                                                <option value="William Smith">William Smith</option>
                                                <option value="Danny Green">Danny Green</option>
                                                <option value="Jason Thompson">Jason Thompson</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md d-flex align-items-center align-items-stretch">
                                <div class="form-group py-md-4 py-2 px-4 px-md-0 d-flex align-items-stretch bg-primary">
                                    <input type="submit" id="appointment_btn" value="Make an Appointment" class="btn btn-primary py-3 px-4">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>