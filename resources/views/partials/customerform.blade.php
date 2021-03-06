<div class="customer-form">
    <div class="address" id="address">
    <div class="billing-header">
        <div class="billing-header-title">
            <span class="billing-header-radio">
            <input type="radio" checked="checked" disabled/>
            </span>
            <span class="billing-header-title-name">Enter Billing Information</span>
        </div>
    </div>
    <form class="address-form" action="/destination" method="get">
        <div class="address-line" id="addressLine1">
            <div class="address-input" id="first">
                <label class="address-label" for="firstName">First Name</label>
                <input type="text" class="form-control" placeholder="First Name" name="firstName" value="Joe" readonly>
            </div>
            <div class="address-input" id="last">
                <label class="address-label" for="lastName">Last Name</label>
                <input type="text" class="form-control" placeholder="Last Name" name="lastName" value="Bob" readonly>
            </div>
        </div>
        <div class="address-line" id="addressLine2">
            <div class="address-input full-width" id="street">
                <label class="address-label" for="street">Street</label>
                <input type="text" class="form-control" placeholder="Street" name="street" value="274 Brannan Street" readonly>
            </div>
        </div>
        <div class="address-line" id="addressLine3">
            <div class="address-input full-width" id="city">
                <label class="address-label" for="city">City</label>
                <input type="text" class="form-control" placeholder="City" name="city" value="San Francisco" readonly>
            </div>
        </div>
        <div class="address-line" id="addressLine4">
            <div class="address-input" id="state">
                <label class="address-label" for="state">State</label>
                <input type="text" class="form-control" placeholder="State" name="stateOrProvince" value="California" readonly>
            </div>
            <div class="address-input" id="zip">
                <label class="address-label" for="zipcode">Zip Code</label>
                <input type="text" class="form-control" placeholder="Zip Code" name="postalCode" value="94107" readonly>
            </div>
            <div class="address-input" id="country">
                <label class="address-label" for="country">Country</label>
                <input type="text" class="form-control" placeholder="Country" name="country" value="United States" readonly>
            </div>
        </div>
    </form>
    </div>
</div>