
<?php $__env->startSection('content'); ?>

<div class="box mt-3">

    <!-- Row 1: Welcome + Profile Section -->
    <div class="row">
        <div class="col-md-8 animate__animated animate__backInDown">
            <h2 class="text-success">Welcome to Smart City Information System</h2>
            <p class="text-muted">Access real-time city updates, public services, and community resources.</p>
        </div>
    </div>

    <!-- Row 2: News Ticker + Emergency Alerts -->
    <div class="row my-3">
        <div class="col-md-8 animate__animated animate__backInLeft">
            <div class="alert alert-primary move glow" role="alert">
                📢 <strong>Latest News:</strong> City Marathon scheduled for April 15. Register now!
            </div>
        </div>
        <div class="col-md-4 animate__animated animate__backInRight">
            <div class="alert alert-danger move glow" role="alert">
                🚨 <strong>Emergency Alert:</strong> Heavy rains expected tomorrow. Stay safe!
            </div>
        </div>
    </div>

    <!-- Row 3: Dashboard (Weather, Traffic, Budget) -->
    <div class="row">
        <div class="col-md-4 animate__animated animate__backInLeft">
            <div class="card text-white bg-primary mb-3 move glow">
                <div class="card-body">
                    <h5 class="card-title">Weather Update</h5>
                    <p>🌤 28°C | Humidity: 65%</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 animate__animated animate__backInDown">
            <div class="card text-white bg-primary mb-3 move glow">
                <div class="card-body">
                    <h5 class="card-title">Traffic Status</h5>
                    <p>🚦 Moderate traffic in central areas.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 animate__animated animate__backInRight">
            <div class="card text-white bg-success mb-3 move glow">
                <div class="card-body">
                    <h5 class="card-title">City Budget Overview</h5>
                    <p>💰 Public Services: $12M | Infrastructure: $8M</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Row 4: Smart Services + Transport Updates -->
    <div class="row">
        <div class="col-md-6 animate__animated animate__backInLeft">
            <div class="card shadow-sm move glow">
                <div class="card-body">
                    <h5 class="card-title">Recommended Smart Services</h5>
                    <ul>
                        <li>💳 Apply for Digital ID</li>
                        <li>🗑 Waste Collection Schedule</li>
                        <li>🚗 Smart Parking Finder</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 animate__animated animate__backInRight">
            <div class="card shadow-sm move glow">
                <div class="card-body">
                    <h5 class="card-title">Live Transport Updates</h5>
                    <p>🚌 Next Bus: 10 mins | 🚆 Metro Arrival: 5 mins</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Row 5: City Events + Calendar -->
    <div class="row mt-4">
        <div class="col-md-6 animate__animated animate__backInLeft">
            <div class="card shadow-sm move glow">
                <div class="card-body">
                    <h5 class="card-title">Upcoming Events</h5>
                    <p>🏃‍♂️ City Marathon on April 15.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 animate__animated animate__backInRight">
            <div class="card shadow-sm move glow">
                <div class="card-body">
                    <h5 class="card-title">Event Calendar</h5>
                    <p>📅 See all city events in the interactive calendar.</p>
                    <a href="<?php echo e(route('calendar')); ?>" class="btn btn-success">View Calendar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Row 6: Feedback + Map -->
    <div class="row mt-4">
        <div class="col-md-6 animate__animated animate__backInLeft">
            <form action="/cfeedbackinsert" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="card shadow-sm move glow">
                    <div class="card-body">
                        <h5 class="card-title">Citizen Feedback</h5>
                        <textarea class="form-control" rows="3" placeholder="Share your thoughts..." name="Details"></textarea>
                        <input type="submit" class="btn btn-success mt-2" name="submit" value="Submit">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6 animate__animated animate__backInRight">
            <div class="card shadow-sm move glow">
                <div class="card-body">
                    <h5 class="card-title">Map</h5>
                    <iframe style="width:100%;" src="https://www.google.com/maps/embed?..."></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Help Section -->
    <div class="col-md-6 text-center mb-3 animate__animated animate__backInUp">
        <div class="card shadow-sm move glow">
            <div class="card-body">
                <h5 class="card-title">Need Help?</h5>
                <button class="btn btn-primary">Chat with SmartBot 🤖</button>
            </div>
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('citizen\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Project1\resources\views/citizen\citizen.blade.php ENDPATH**/ ?>