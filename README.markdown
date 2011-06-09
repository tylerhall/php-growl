PHP-Growl is an implementation of the [Growl notification system](http://growl.info) written in PHP.

As a proof of concept example, I've written a [Mint](http://haveamint.com) [Pepper](http://haveamint.com/peppermill/) plugin that notifies you whenever certain events (like new referrals, unique visitors, etc) happen on your website. It's a slick way to stay on top of who is visiting your site. You can [download Growl Pepper here](http://www.haveamint.com/peppermill/pepper/49/growl/).

    <?PHP
        $growl = new Growl($ip_address);
        
        // Adding and registering your notifications with Growl
        // only needs to be done once per computer. Growl will
        // remember your app after this.
        $growl->addNotification('Notification Name');
        $growl->addNotification('Another Notification');
        $growl->register();
        
        // Send a notification
        $growl->notify('Notification Name', 'Some Title', 'Some message to display');
        
        // Send a second notification
        $growl->notify('Another Notification', 'Another Title', 'Something useful I hope.');
