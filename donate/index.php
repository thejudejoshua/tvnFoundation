<?php include_once '../nav.php'?>
<header id="breadcrumb">
    <h1>Donate</h1>
    <p>Join in helping women now by making a donation today.</p>
</header>
<main id="contact" class="donate">
    <section class="contact-form-holder">
        <div class="contactBanner">
            <div class="contactForm_text">
                <p>By providing breast health education, early detection services, and a helping hand to those facing breast cancer, NBCF is there at every step of the journey. This is what sets NBCF apart from other organizations and you can be a part of this!<br/><br/>NBCF is committed to treating your gift with integrity. On average, over 80% of our spending is directed back into our programs that support women facing breast cancer.</p>
            </div>
        </div>
        <div class="contact-form_ctA">
            <div class="form-group">
                <h5>Choose an amount to Donate</h5>
                <div class="row">
                    <div class="row-amt">
                        <input id="amt1" name="amt" class="amt" type="radio" value="50">
                        <label class="amt-hold" for="amt1">$50 <span>USD</span></label>
                    </div>
                    <div class="row-amt">
                        <input id="amt2" name="amt" class="amt" type="radio" value="100">
                        <label class="amt-hold" for="amt2">$100 <span>USD</span></label>
                    </div>
                    <div class="row-amt">
                        <input id="amt3" name="amt" class="amt" type="radio" value="150">
                        <label class="amt-hold" for="amt3">$150 <span>USD</span></label>
                    </div>
                </div>
                <div class="row">
                    <div class="row-amt">
                        <input id="amt4" name="amt" class="amt" type="radio" value="200">
                        <label class="amt-hold" for="amt4">$200 <span>USD</span></label>
                    </div>
                </div>
                <div class="form-input">
                    <label for="first-name">Enter other amount</label>
                    <input id="amt5" name="amt" type="text" placeholder="Enter other amount...">
                </div>
            </div>
            <hr/>
            <div class="form-group">
                <h5>Are you making this donation in honor of someone?</h5>
                <div class="row">
                    <div class="row-amt">
                        <input id="amt1" name="amt" class="amt" type="radio" value="50">
                        <label class="amt-hold" for="amt1">Yes</label>
                    </div>
                    <div class="row-amt">
                        <input id="amt2" name="amt" class="amt" type="radio" value="100">
                        <label class="amt-hold" for="amt2">No</label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <h5>Enter your information below</h5>
                <div class="form-input dual">
                    <label for="first-name">Name (Required)</label>
                    <div>
                        <div class="dual-kit">
                            <input type="text" placeholder="First Name" id="first-name">
                        </div>
                        <div class="dual-kit">
                            <input type="text" placeholder="Last Name" id="last-name">
                        </div>
                    </div>
                </div>
                <div class="form-input">
                    <label for="email">Email (Required)</label>
                    <input type="email" placeholder="Email" id="email">
                </div>
                <div class="form-input">
                    <label for="phone-number">Phone Number (Not Required)</label>
                    <input type="tel" placeholder="Phone Number" id="phone-number">
                </div>
                <div class="form-input">
                    <label for="message">Comments (Not Required)</label>
                    <textarea placeholder="Message" id="message"></textarea>
                </div>
            </div>
            <hr>
            <div class="button form-group">
                <h5>Make donation with</h5>
                <div class="form-input dual">
                    <div>
                        <div class="dual-kit">
                            <button type="button" class="ctaButton colored">Credit Card</button>
                        </div>
                        <div class="dual-kit">
                            <button type="button" class="ctaButton colored">Paypal</button>
                        </div>
                    </div>
                </div>
                <div class="form-input dual">
                    <div>
                        <div class="dual-kit">
                            <button type="button" class="ctaButton colored">Bank Transfer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="options-holder about">
        <div class="options">
            <div class="options-top">
                <img src="/img/contact-options-image-1.svg" class="options-image">
                <p>
                    Tel: 1 (646) 688-2323<br/> Fax: 1 (929) 367-4827
                </p>
            </div>
        </div>
        <div class="options">
            <div class="options-top">
                <img src="/img/contact-options-image-2.svg" class="options-image">
                <p>
                    40 Worth Street, Suite 829<br/> New York, NY 10013
                </p>
            </div>
        </div>
        <div class="options">
            <div class="options-top">
                <img src="/img/contact-options-image-3.svg" class="options-image">
                <p>
                    Need assistance?<br/> Check out our Help Center.
                </p>
            </div>
        </div>
    </section>

    <?php include_once '../footer.php'?>