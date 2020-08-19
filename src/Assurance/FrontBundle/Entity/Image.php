<?php

namespace Assurance\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

 /**
 * image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Image
{	
	const SERVER_PATH_TO_IMAGE_FOLDER = 'uploads/media';

	/**
	* Unmapped property to handle file uploads
	*/
	protected $file;

	/**
	* Sets file.
	*
	* @param UploadedFile $file
	*/
	public function setFile(UploadedFile $file = null)
	{
		$this->file = $file;
	}

	/**
	* Get file.
	*
	* @return UploadedFile
	*/
	public function getFile()
	{
		return $this->file;
	}

	/**
	* Manages the copying of the file to the relevant place on the server
	*/
	public function upload()
	{
		// the file property can be empty if the field is not required
		if (null === $this->getFile()) {
			return;
		}

		// we use the original file name here but you should
		// sanitize it at least to avoid any security issues

		// move takes the target directory and target filename as params
		$this->getFile()->move(
			self::SERVER_PATH_TO_IMAGE_FOLDER,
			$this->getFile()->getClientOriginalName()
		);
		
		// set the path property to the filename where you've saved the file
		$this->filename = $this->getFile()->getClientOriginalName();
		// clean up the file property as you won't need it anymore
		$this->setFile(null);
	}

	/**
	* @ORM\PrePersist()
	* @ORM\PreUpdate()
	**/
	public function lifecycleFileUpload()
	{
		$this->upload();
	}

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=100)
     */
    private $filename;

    /**
     * @var datetime
     *
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    private $updated;

    
	/**
     * Set filename
     *
     * @param string $filename
     * @return Image
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }
	
	/**
     * Set updated
     *
     * @param string $updated
     * @return Projects
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return string 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
	
	public function refreshUpdated()
    {
     $this->setUpdated(new \DateTime());
    }
	
	public function __toString(){
		return ($this->filename) ? $this->filename : '';
	}
}
