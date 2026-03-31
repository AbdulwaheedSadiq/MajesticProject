<!-- ==========Booking Form========== -->
<section class="admission-section padding-bottom padding-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-header left-style mt-md-down mb-sm-3">
                    <h2 class="title">Book Now</h2>
                    <span class="d-inline-block mx-auto shape-header"></span>
                </div>

                <form class="admission-form" method="POST" action="./helpers/processBooking.php">
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="full_name">Full Name</label>
                            <input type="text" id="full_name" name="full_name" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="your@email.com" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="persons">Number of Persons</label>
                            <select id="persons" name="persons" class="select-bar" required>
                                <option value="">Select</option>
                                <option value="1">1 Person</option>
                                <option value="2">2 Persons</option>
                                <option value="3">3 Persons</option>
                                <option value="4">4 Persons</option>
                                <option value="5">5 Persons</option>
                                <option value="6">6 Persons</option>
                                <option value="7">7 Persons</option>
                                <option value="8">8 Persons</option>
                                <option value="9+">9+ Persons (contact us)</option>
                            </select>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="phone">Phone Number (with country code)</label>
                            <input type="tel" id="phone" name="phone" placeholder="+255 717 708 090" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="month">Departure Month</label>
                            <select id="month" name="month" class="select-bar" required>
                                <option value="">Select Month</option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                        </div>

                        <div class="form-group col-12">
                            <label for="message">Additional Message (Optional)</label>
                            <textarea id="message" name="message" rows="4" placeholder="Any special requests or questions?"></textarea>
                        </div>

                        <div class="form-group col-3">
                            <button type="submit" class="custom-button" >Submit Booking Request</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-4">
                <div class="bg_img w-100 h-100" data-background="assets/images/about/about07.jpg"></div>
            </div>
        </div>
    </div>
</section>