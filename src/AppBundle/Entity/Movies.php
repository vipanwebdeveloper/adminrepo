<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movies
 *
 * @ORM\Table(name="movies")
 * @ORM\Entity
 */
class Movies
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="year", type="string", length=255, nullable=true)
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="rated", type="string", length=255, nullable=true)
     */
    private $rated;

    /**
     * @var string
     *
     * @ORM\Column(name="released", type="string", length=255, nullable=true)
     */
    private $released;

    /**
     * @var string
     *
     * @ORM\Column(name="runtime", type="string", length=255, nullable=true)
     */
    private $runtime;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=255, nullable=true)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="director", type="string", length=255, nullable=true)
     */
    private $director;

    /**
     * @var string
     *
     * @ORM\Column(name="writer", type="string", length=255, nullable=true)
     */
    private $writer;

    /**
     * @var string
     *
     * @ORM\Column(name="actors", type="string", length=255, nullable=true)
     */
    private $actors;

    /**
     * @var string
     *
     * @ORM\Column(name="plot", type="string", length=255, nullable=true)
     */
    private $plot;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=255, nullable=true)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="awards", type="string", length=255, nullable=true)
     */
    private $awards;

    /**
     * @var string
     *
     * @ORM\Column(name="poster", type="string", length=255, nullable=true)
     */
    private $poster;

    /**
     * @var string
     *
     * @ORM\Column(name="metascore", type="string", length=255, nullable=true)
     */
    private $metascore;

    /**
     * @var string
     *
     * @ORM\Column(name="imdbrating", type="string", length=255, nullable=true)
     */
    private $imdbrating;

    /**
     * @var string
     *
     * @ORM\Column(name="imdbvotes", type="string", length=255, nullable=true)
     */
    private $imdbvotes;

    /**
     * @var string
     *
     * @ORM\Column(name="imdbid", type="string", length=255, nullable=true)
     */
    private $imdbid;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="response", type="string", length=255, nullable=true)
     */
    private $response;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime", nullable=false)
     */
    private $createdat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime", nullable=true)
     */
    private $updatedat;

    /**
     * @var string
     *
     * @ORM\Column(name="imdb_id", type="string", length=255, nullable=false)
     */
    private $imdbId;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Movies
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set year
     *
     * @param string $year
     * @return Movies
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set rated
     *
     * @param string $rated
     * @return Movies
     */
    public function setRated($rated)
    {
        $this->rated = $rated;

        return $this;
    }

    /**
     * Get rated
     *
     * @return string 
     */
    public function getRated()
    {
        return $this->rated;
    }

    /**
     * Set released
     *
     * @param string $released
     * @return Movies
     */
    public function setReleased($released)
    {
        $this->released = $released;

        return $this;
    }

    /**
     * Get released
     *
     * @return string 
     */
    public function getReleased()
    {
        return $this->released;
    }

    /**
     * Set runtime
     *
     * @param string $runtime
     * @return Movies
     */
    public function setRuntime($runtime)
    {
        $this->runtime = $runtime;

        return $this;
    }

    /**
     * Get runtime
     *
     * @return string 
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * Set genre
     *
     * @param string $genre
     * @return Movies
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set director
     *
     * @param string $director
     * @return Movies
     */
    public function setDirector($director)
    {
        $this->director = $director;

        return $this;
    }

    /**
     * Get director
     *
     * @return string 
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Set writer
     *
     * @param string $writer
     * @return Movies
     */
    public function setWriter($writer)
    {
        $this->writer = $writer;

        return $this;
    }

    /**
     * Get writer
     *
     * @return string 
     */
    public function getWriter()
    {
        return $this->writer;
    }

    /**
     * Set actors
     *
     * @param string $actors
     * @return Movies
     */
    public function setActors($actors)
    {
        $this->actors = $actors;

        return $this;
    }

    /**
     * Get actors
     *
     * @return string 
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * Set plot
     *
     * @param string $plot
     * @return Movies
     */
    public function setPlot($plot)
    {
        $this->plot = $plot;

        return $this;
    }

    /**
     * Get plot
     *
     * @return string 
     */
    public function getPlot()
    {
        return $this->plot;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return Movies
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Movies
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set awards
     *
     * @param string $awards
     * @return Movies
     */
    public function setAwards($awards)
    {
        $this->awards = $awards;

        return $this;
    }

    /**
     * Get awards
     *
     * @return string 
     */
    public function getAwards()
    {
        return $this->awards;
    }

    /**
     * Set poster
     *
     * @param string $poster
     * @return Movies
     */
    public function setPoster($poster)
    {
        $this->poster = $poster;

        return $this;
    }

    /**
     * Get poster
     *
     * @return string 
     */
    public function getPoster()
    {
        return $this->poster;
    }

    /**
     * Set metascore
     *
     * @param string $metascore
     * @return Movies
     */
    public function setMetascore($metascore)
    {
        $this->metascore = $metascore;

        return $this;
    }

    /**
     * Get metascore
     *
     * @return string 
     */
    public function getMetascore()
    {
        return $this->metascore;
    }

    /**
     * Set imdbrating
     *
     * @param string $imdbrating
     * @return Movies
     */
    public function setImdbrating($imdbrating)
    {
        $this->imdbrating = $imdbrating;

        return $this;
    }

    /**
     * Get imdbrating
     *
     * @return string 
     */
    public function getImdbrating()
    {
        return $this->imdbrating;
    }

    /**
     * Set imdbvotes
     *
     * @param string $imdbvotes
     * @return Movies
     */
    public function setImdbvotes($imdbvotes)
    {
        $this->imdbvotes = $imdbvotes;

        return $this;
    }

    /**
     * Get imdbvotes
     *
     * @return string 
     */
    public function getImdbvotes()
    {
        return $this->imdbvotes;
    }

    /**
     * Set imdbid
     *
     * @param string $imdbid
     * @return Movies
     */
    public function setImdbid($imdbid)
    {
        $this->imdbid = $imdbid;

        return $this;
    }

    /**
     * Get imdbid
     *
     * @return string 
     */
    public function getImdbid()
    {
        return $this->imdbid;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Movies
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set response
     *
     * @param string $response
     * @return Movies
     */
    public function setResponse($response)
    {
        $this->response = $response;

        return $this;
    }

    /**
     * Get response
     *
     * @return string 
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Set createdat
     *
     * @param \DateTime $createdat
     * @return Movies
     */
    public function setCreatedat($createdat)
    {
        $this->createdat = $createdat;

        return $this;
    }

    /**
     * Get createdat
     *
     * @return \DateTime 
     */
    public function getCreatedat()
    {
        return $this->createdat;
    }

    /**
     * Set updatedat
     *
     * @param \DateTime $updatedat
     * @return Movies
     */
    public function setUpdatedat($updatedat)
    {
        $this->updatedat = $updatedat;

        return $this;
    }

    /**
     * Get updatedat
     *
     * @return \DateTime 
     */
    public function getUpdatedat()
    {
        return $this->updatedat;
    }

    /**
     * Set imdbId
     *
     * @param string $imdbId
     * @return Movies
     */
    public function setImdbId($imdbId)
    {
        $this->imdbId = $imdbId;

        return $this;
    }

    /**
     * Get imdbId
     *
     * @return string 
     */
    public function getImdbId()
    {
        return $this->imdbId;
    }
}
