<html>
    <head></head>
    <body>
        <pre>
            ID: <?php echo $school->getID(); ?>
            MIdent: <?php echo $school->getMident(); ?>
            Alpha Code: <?php echo $school->getAlphaCode(); ?>
            Full Name: <?php echo $school->getFullName(); ?>
            Abbreviated Name: <?php echo $school->getAbbreviatedName(); ?>
            Active? <?php echo $school->getIsActive(); ?>

            School Type: <?php echo $school->getSchoolType(); ?>
            Categories: <?php echo $school->getCategories(); ?>
            Tags: <?php echo $school->getTags(); ?>

            Website: <?php echo $school->getWebsiteURL(); ?>
            Public Calendar ID: <?php echo $school->getPublicCalendarID(); ?>
            Staff Calendar ID": <?php echo $school->getStaffCalendarID(); ?>
            Map URL: <?php echo $school->getMapURL(); ?>

            Street Address: <?php echo $school->getStreetAddress(); ?>
            City: <?php echo $school->getCity(); ?>
            Province: <?php echo $school->getProvince(); ?>
            Postal Code: <?php echo $school->getPostalCode(); ?>

            Phone: <?php echo $school->getPhone(); ?>
            Fax: <?php echo $school->getFax(); ?>

            Principal: <?php echo $school->getPrincipal(); ?>
            Vice Principals: <?php echo $school->getVicePrincipals(); ?>
            ITS Computer Contact: <?php echo $school->getComputerContact(); ?>
        </pre>
    </body>
</html>
