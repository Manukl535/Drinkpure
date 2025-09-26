<?php
function render_service_form() {
    echo '<h2>Service Request</h2><form method="post"><input name="name" placeholder="Name" required><input name="email" placeholder="Email" required><input name="phone" placeholder="Phone"><textarea name="address" placeholder="Address"></textarea><textarea name="message" placeholder="Describe the issue"></textarea><button type="submit">Submit</button></form>';
}
