<?php
namespace WRDSB\SchoolHandbooks\Modules\Codex\Model;

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/wrdsb
 * @since      1.0.0
 *
 * @package    WRDSB_SchoolHandbooks
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    WRDSB_SchoolHandbooks
 * @author     WRDSB <website@wrdsb.ca>
 */
class School
{
    /**
     * The ID of this school in the Codex database.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $id    The database ID of this school.
     */
    private $id;

    private $mident;
    private $alpha_code;
    private $is_active;
    private $full_name;
    private $abbreviated_name;
    private $school_type;
    private $categories;
    private $tags;
    private $website_url;
    private $public_calendar_id;
    private $staff_calendar_id;
    private $map_url;
    private $street_address;
    private $city;
    private $province;
    private $postal_code;
    private $phone;
    private $fax;
    private $principal;
    private $vice_principals;
    private $computer_contact;

    /**
     * Someting
     *
     * Something else
     *
     * @since    1.0.0
     */
    public function __construct($data)
    {
        $this->id                 = $data['id'];
        $this->mident             = $data['mident'];
        $this->alpha_code         = $data['alpha_code'];

        $this->is_active          = $data['is_active'];

        $this->full_name          = $data['full_name'];
        $this->abbreviated_name   = $data['abbreviated_name'];

        $this->school_type        = $data['school_type'];
        $this->categories         = $data['categories'];
        $this->tags               = $data['tags'];

        $this->website_url        = $data['website_url'];
        $this->public_calendar_id = $data['public_calendar_id'];
        $this->staff_calendar_id  = $data['staff_calendar_id'];
        $this->map_url            = $data['map_url'];

        $this->street_address     = $data['street_address'];
        $this->city               = $data['city'];
        $this->province           = $data['province'];
        $this->postal_code        = $data['postal_code'];

        $this->phone              = $data['phone'];
        $this->fax                = $data['fax'];

        $this->principal          = $data['principal'];
        $this->vice_principals    = $data['vice_principals'];
        $this->computer_contact   = $data['computer_contact'];
    }

    public function getId()
    {
        return $this->id;
    }

    public function getMident()
    {
        return $this->mident;
    }

    public function getAlphaCode()
    {
        return $this->alpha_code;
    }

    public function getIsActive()
    {
        return $this->is_active;
    }

    public function getFullName()
    {
        return $this->full_name;
    }

    public function getAbbreviatedName()
    {
        return $this->abbreviated_name;
    }

    public function getSchoolType()
    {
        return $this->school_type;
    }

    public function getCategories()
    {
        return $this->categories;
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function getWebsiteURL()
    {
        return $this->website_url;
    }

    public function getPublicCalendarID()
    {
        return $this->public_calendar_id;
    }

    public function getStaffCalendarID()
    {
        return $this->staff_calendar_id;
    }

    public function getMapURL()
    {
        return $this->map_url;
    }

    public function getStreetAddress()
    {
        return $this->street_address;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getProvince()
    {
        return $this->province;
    }

    public function getPostalCode()
    {
        return $this->postal_code;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getFax()
    {
        return $this->fax;
    }

    public function getPrincipal()
    {
        return $this->principal;
    }

    public function getVicePrincipal()
    {
        return $this->vice_principals;
    }

    public function getComputerContact()
    {
        return $this->computer_contact;
    }
}
