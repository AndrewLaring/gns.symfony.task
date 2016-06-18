<?php

namespace Games\GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Game
 *
 * @ORM\Table(name="game")
 * @ORM\Entity
 */
class Game
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="GameID", type="integer", nullable=false)
     */
    private $gameid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Season", type="boolean", nullable=true)
     */
    private $season;

    /**
     * @var boolean
     *
     * @ORM\Column(name="SeasonType", type="boolean", nullable=false)
     */
    private $seasontype;

    /**
     * @var string
     *
     * @ORM\Column(name="Status", type="string", length=50, nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Day", type="string", nullable=false)
     */
    private $day;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateTime", type="string", nullable=false)
     */
    private $datetime;

    /**
     * @var string
     *
     * @ORM\Column(name="AwayTeam", type="string", length=20, nullable=false)
     */
    private $awayteam;

    /**
     * @var string
     *
     * @ORM\Column(name="HomeTeam", type="string", length=20, nullable=false)
     */
    private $hometeam;

    /**
     * @var integer
     *
     * @ORM\Column(name="AwayTeamID", type="integer", nullable=false)
     */
    private $awayteamid;

    /**
     * @var integer
     *
     * @ORM\Column(name="HomeTeamID", type="integer", nullable=false)
     */
    private $hometeamid;

    /**
     * @var integer
     *
     * @ORM\Column(name="RescheduledGameID", type="integer", nullable=false)
     */
    private $rescheduledgameid;

    /**
     * @var integer
     *
     * @ORM\Column(name="StadiumID", type="integer", nullable=false)
     */
    private $stadiumid;

    /**
     * @var string
     *
     * @ORM\Column(name="Channel", type="string", length=50, nullable=false)
     */
    private $channel;

    /**
     * @var integer
     *
     * @ORM\Column(name="Inning", type="integer", nullable=false)
     */
    private $inning;

    /**
     * @var string
     *
     * @ORM\Column(name="InningHalf", type="string", length=2, nullable=false)
     */
    private $inninghalf;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AwayTeamRuns", type="boolean", nullable=false)
     */
    private $awayteamruns;

    /**
     * @var boolean
     *
     * @ORM\Column(name="HomeTeamRuns", type="boolean", nullable=false)
     */
    private $hometeamruns;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AwayTeamHits", type="boolean", nullable=false)
     */
    private $awayteamhits;

    /**
     * @var boolean
     *
     * @ORM\Column(name="HomeTeamHits", type="boolean", nullable=false)
     */
    private $hometeamhits;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AwayTeamErrors", type="boolean", nullable=false)
     */
    private $awayteamerrors;

    /**
     * @var string
     *
     * @ORM\Column(name="HomeTeamErrors", type="string", length=4, nullable=false)
     */
    private $hometeamerrors;

    /**
     * @var integer
     *
     * @ORM\Column(name="WinningPitcherID", type="integer", nullable=false)
     */
    private $winningpitcherid;

    /**
     * @var integer
     *
     * @ORM\Column(name="LosingPitcherID", type="integer", nullable=false)
     */
    private $losingpitcherid;

    /**
     * @var integer
     *
     * @ORM\Column(name="SavingPitcherID", type="integer", nullable=false)
     */
    private $savingpitcherid;

    /**
     * @var string
     *
     * @ORM\Column(name="Attendance", type="string", length=50, nullable=false)
     */
    private $attendance;

    /**
     * @var integer
     *
     * @ORM\Column(name="AwayTeamProbablePitcherID", type="integer", nullable=false)
     */
    private $awayteamprobablepitcherid;

    /**
     * @var integer
     *
     * @ORM\Column(name="HomeTeamProbablePitcherID", type="integer", nullable=false)
     */
    private $hometeamprobablepitcherid;

    /**
     * @var integer
     *
     * @ORM\Column(name="Outs", type="integer", nullable=false)
     */
    private $outs;

    /**
     * @var integer
     *
     * @ORM\Column(name="Balls", type="integer", nullable=false)
     */
    private $balls;

    /**
     * @var integer
     *
     * @ORM\Column(name="Strikes", type="integer", nullable=false)
     */
    private $strikes;

    /**
     * @var integer
     *
     * @ORM\Column(name="CurrentPitcherID", type="integer", nullable=false)
     */
    private $currentpitcherid;

    /**
     * @var integer
     *
     * @ORM\Column(name="CurrentHitterID", type="integer", nullable=false)
     */
    private $currenthitterid;

    /**
     * @var integer
     *
     * @ORM\Column(name="AwayTeamStartingPitcherID", type="integer", nullable=false)
     */
    private $awayteamstartingpitcherid;

    /**
     * @var integer
     *
     * @ORM\Column(name="HomeTeamStartingPitcherID", type="integer", nullable=false)
     */
    private $hometeamstartingpitcherid;

    /**
     * @var integer
     *
     * @ORM\Column(name="CurrentPitchingTeamID", type="integer", nullable=false)
     */
    private $currentpitchingteamid;

    /**
     * @var integer
     *
     * @ORM\Column(name="CurrentHittingTeamID", type="integer", nullable=false)
     */
    private $currenthittingteamid;

    /**
     * @var string
     *
     * @ORM\Column(name="PointSpread", type="string", length=50, nullable=false)
     */
    private $pointspread;

    /**
     * @var string
     *
     * @ORM\Column(name="OverUnder", type="string", length=50, nullable=false)
     */
    private $overunder;

    /**
     * @var string
     *
     * @ORM\Column(name="AwayTeamMoneyLine", type="string", length=50, nullable=false)
     */
    private $awayteammoneyline;

    /**
     * @var string
     *
     * @ORM\Column(name="HomeTeamMoneyLine", type="string", length=50, nullable=false)
     */
    private $hometeammoneyline;

    /**
     * @var string
     *
     * @ORM\Column(name="ForecastTempLow", type="string", length=50, nullable=false)
     */
    private $forecasttemplow;

    /**
     * @var string
     *
     * @ORM\Column(name="ForecastTempHigh", type="string", length=50, nullable=false)
     */
    private $forecasttemphigh;

    /**
     * @var string
     *
     * @ORM\Column(name="ForecastDescription", type="string", length=50, nullable=false)
     */
    private $forecastdescription;

    /**
     * @var string
     *
     * @ORM\Column(name="ForecastWindChill", type="string", length=50, nullable=false)
     */
    private $forecastwindchill;

    /**
     * @var string
     *
     * @ORM\Column(name="ForecastWindSpeed", type="string", length=50, nullable=false)
     */
    private $forecastwindspeed;

    /**
     * @var string
     *
     * @ORM\Column(name="ForecastWindDirection", type="string", length=50, nullable=false)
     */
    private $forecastwinddirection;

    /**
     * @var integer
     *
     * @ORM\Column(name="RescheduledFromGameID", type="integer", nullable=false)
     */
    private $rescheduledfromgameid;

    /**
     * @var string
     *
     * @ORM\Column(name="RunnerOnFirst", type="string", length=50, nullable=false)
     */
    private $runneronfirst;

    /**
     * @var string
     *
     * @ORM\Column(name="RunnerOnSecond", type="string", length=50, nullable=false)
     */
    private $runneronsecond;

    /**
     * @var string
     *
     * @ORM\Column(name="RunnerOnThird", type="string", length=50, nullable=false)
     */
    private $runneronthird;

    /**
     * @var string
     *
     * @ORM\Column(name="WinningPitcher", type="string", length=50, nullable=false)
     */
    private $winningpitcher;

    /**
     * @var string
     *
     * @ORM\Column(name="LosingPitcher", type="string", length=50, nullable=false)
     */
    private $losingpitcher;

    /**
     * @var string
     *
     * @ORM\Column(name="SavingPitcher", type="string", length=50, nullable=false)
     */
    private $savingpitcher;

    /**
     * @var string
     *
     * @ORM\Column(name="AwayTeamStartingPitcher", type="string", length=50, nullable=false)
     */
    private $awayteamstartingpitcher;

    /**
     * @var string
     *
     * @ORM\Column(name="HomeTeamStartingPitcher", type="string", length=50, nullable=false)
     */
    private $hometeamstartingpitcher;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrentPitcher", type="string", length=50, nullable=false)
     */
    private $currentpitcher;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrentHitter", type="string", length=50, nullable=false)
     */
    private $currenthitter;



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
     * Set gameid
     *
     * @param integer $gameid
     *
     * @return Game
     */
    public function setGameid($gameid)
    {
        $this->gameid = $gameid;

        return $this;
    }

    /**
     * Get gameid
     *
     * @return integer
     */
    public function getGameid()
    {
        return $this->gameid;
    }

    /**
     * Set season
     *
     * @param boolean $season
     *
     * @return Game
     */
    public function setSeason($season)
    {
        $this->season = $season;

        return $this;
    }

    /**
     * Get season
     *
     * @return boolean
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * Set seasontype
     *
     * @param boolean $seasontype
     *
     * @return Game
     */
    public function setSeasontype($seasontype)
    {
        $this->seasontype = $seasontype;

        return $this;
    }

    /**
     * Get seasontype
     *
     * @return boolean
     */
    public function getSeasontype()
    {
        return $this->seasontype;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Game
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set day
     *
     * @param string $day
     *
     * @return Game
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return string
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set datetime
     *
     * @param string $datetime
     *
     * @return Game
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;

        return $this;
    }

    /**
     * Get datetime
     *
     * @return string
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * Set awayteam
     *
     * @param string $awayteam
     *
     * @return Game
     */
    public function setAwayteam($awayteam)
    {
        $this->awayteam = $awayteam;

        return $this;
    }

    /**
     * Get awayteam
     *
     * @return string
     */
    public function getAwayteam()
    {
        return $this->awayteam;
    }

    /**
     * Set hometeam
     *
     * @param string $hometeam
     *
     * @return Game
     */
    public function setHometeam($hometeam)
    {
        $this->hometeam = $hometeam;

        return $this;
    }

    /**
     * Get hometeam
     *
     * @return string
     */
    public function getHometeam()
    {
        return $this->hometeam;
    }

    /**
     * Set awayteamid
     *
     * @param integer $awayteamid
     *
     * @return Game
     */
    public function setAwayteamid($awayteamid)
    {
        $this->awayteamid = $awayteamid;

        return $this;
    }

    /**
     * Get awayteamid
     *
     * @return integer
     */
    public function getAwayteamid()
    {
        return $this->awayteamid;
    }

    /**
     * Set hometeamid
     *
     * @param integer $hometeamid
     *
     * @return Game
     */
    public function setHometeamid($hometeamid)
    {
        $this->hometeamid = $hometeamid;

        return $this;
    }

    /**
     * Get hometeamid
     *
     * @return integer
     */
    public function getHometeamid()
    {
        return $this->hometeamid;
    }

    /**
     * Set rescheduledgameid
     *
     * @param integer $rescheduledgameid
     *
     * @return Game
     */
    public function setRescheduledgameid($rescheduledgameid)
    {
        $this->rescheduledgameid = $rescheduledgameid;

        return $this;
    }

    /**
     * Get rescheduledgameid
     *
     * @return integer
     */
    public function getRescheduledgameid()
    {
        return $this->rescheduledgameid;
    }

    /**
     * Set stadiumid
     *
     * @param integer $stadiumid
     *
     * @return Game
     */
    public function setStadiumid($stadiumid)
    {
        $this->stadiumid = $stadiumid;

        return $this;
    }

    /**
     * Get stadiumid
     *
     * @return integer
     */
    public function getStadiumid()
    {
        return $this->stadiumid;
    }

    /**
     * Set channel
     *
     * @param string $channel
     *
     * @return Game
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * Get channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Set inning
     *
     * @param integer $inning
     *
     * @return Game
     */
    public function setInning($inning)
    {
        $this->inning = $inning;

        return $this;
    }

    /**
     * Get inning
     *
     * @return integer
     */
    public function getInning()
    {
        return $this->inning;
    }

    /**
     * Set inninghalf
     *
     * @param string $inninghalf
     *
     * @return Game
     */
    public function setInninghalf($inninghalf)
    {
        $this->inninghalf = $inninghalf;

        return $this;
    }

    /**
     * Get inninghalf
     *
     * @return string
     */
    public function getInninghalf()
    {
        return $this->inninghalf;
    }

    /**
     * Set awayteamruns
     *
     * @param boolean $awayteamruns
     *
     * @return Game
     */
    public function setAwayteamruns($awayteamruns)
    {
        $this->awayteamruns = $awayteamruns;

        return $this;
    }

    /**
     * Get awayteamruns
     *
     * @return boolean
     */
    public function getAwayteamruns()
    {
        return $this->awayteamruns;
    }

    /**
     * Set hometeamruns
     *
     * @param boolean $hometeamruns
     *
     * @return Game
     */
    public function setHometeamruns($hometeamruns)
    {
        $this->hometeamruns = $hometeamruns;

        return $this;
    }

    /**
     * Get hometeamruns
     *
     * @return boolean
     */
    public function getHometeamruns()
    {
        return $this->hometeamruns;
    }

    /**
     * Set awayteamhits
     *
     * @param boolean $awayteamhits
     *
     * @return Game
     */
    public function setAwayteamhits($awayteamhits)
    {
        $this->awayteamhits = $awayteamhits;

        return $this;
    }

    /**
     * Get awayteamhits
     *
     * @return boolean
     */
    public function getAwayteamhits()
    {
        return $this->awayteamhits;
    }

    /**
     * Set hometeamhits
     *
     * @param boolean $hometeamhits
     *
     * @return Game
     */
    public function setHometeamhits($hometeamhits)
    {
        $this->hometeamhits = $hometeamhits;

        return $this;
    }

    /**
     * Get hometeamhits
     *
     * @return boolean
     */
    public function getHometeamhits()
    {
        return $this->hometeamhits;
    }

    /**
     * Set awayteamerrors
     *
     * @param boolean $awayteamerrors
     *
     * @return Game
     */
    public function setAwayteamerrors($awayteamerrors)
    {
        $this->awayteamerrors = $awayteamerrors;

        return $this;
    }

    /**
     * Get awayteamerrors
     *
     * @return boolean
     */
    public function getAwayteamerrors()
    {
        return $this->awayteamerrors;
    }

    /**
     * Set hometeamerrors
     *
     * @param string $hometeamerrors
     *
     * @return Game
     */
    public function setHometeamerrors($hometeamerrors)
    {
        $this->hometeamerrors = $hometeamerrors;

        return $this;
    }

    /**
     * Get hometeamerrors
     *
     * @return string
     */
    public function getHometeamerrors()
    {
        return $this->hometeamerrors;
    }

    /**
     * Set winningpitcherid
     *
     * @param integer $winningpitcherid
     *
     * @return Game
     */
    public function setWinningpitcherid($winningpitcherid)
    {
        $this->winningpitcherid = $winningpitcherid;

        return $this;
    }

    /**
     * Get winningpitcherid
     *
     * @return integer
     */
    public function getWinningpitcherid()
    {
        return $this->winningpitcherid;
    }

    /**
     * Set losingpitcherid
     *
     * @param integer $losingpitcherid
     *
     * @return Game
     */
    public function setLosingpitcherid($losingpitcherid)
    {
        $this->losingpitcherid = $losingpitcherid;

        return $this;
    }

    /**
     * Get losingpitcherid
     *
     * @return integer
     */
    public function getLosingpitcherid()
    {
        return $this->losingpitcherid;
    }

    /**
     * Set savingpitcherid
     *
     * @param integer $savingpitcherid
     *
     * @return Game
     */
    public function setSavingpitcherid($savingpitcherid)
    {
        $this->savingpitcherid = $savingpitcherid;

        return $this;
    }

    /**
     * Get savingpitcherid
     *
     * @return integer
     */
    public function getSavingpitcherid()
    {
        return $this->savingpitcherid;
    }

    /**
     * Set attendance
     *
     * @param string $attendance
     *
     * @return Game
     */
    public function setAttendance($attendance)
    {
        $this->attendance = $attendance;

        return $this;
    }

    /**
     * Get attendance
     *
     * @return string
     */
    public function getAttendance()
    {
        return $this->attendance;
    }

    /**
     * Set awayteamprobablepitcherid
     *
     * @param integer $awayteamprobablepitcherid
     *
     * @return Game
     */
    public function setAwayteamprobablepitcherid($awayteamprobablepitcherid)
    {
        $this->awayteamprobablepitcherid = $awayteamprobablepitcherid;

        return $this;
    }

    /**
     * Get awayteamprobablepitcherid
     *
     * @return integer
     */
    public function getAwayteamprobablepitcherid()
    {
        return $this->awayteamprobablepitcherid;
    }

    /**
     * Set hometeamprobablepitcherid
     *
     * @param integer $hometeamprobablepitcherid
     *
     * @return Game
     */
    public function setHometeamprobablepitcherid($hometeamprobablepitcherid)
    {
        $this->hometeamprobablepitcherid = $hometeamprobablepitcherid;

        return $this;
    }

    /**
     * Get hometeamprobablepitcherid
     *
     * @return integer
     */
    public function getHometeamprobablepitcherid()
    {
        return $this->hometeamprobablepitcherid;
    }

    /**
     * Set outs
     *
     * @param integer $outs
     *
     * @return Game
     */
    public function setOuts($outs)
    {
        $this->outs = $outs;

        return $this;
    }

    /**
     * Get outs
     *
     * @return integer
     */
    public function getOuts()
    {
        return $this->outs;
    }

    /**
     * Set balls
     *
     * @param integer $balls
     *
     * @return Game
     */
    public function setBalls($balls)
    {
        $this->balls = $balls;

        return $this;
    }

    /**
     * Get balls
     *
     * @return integer
     */
    public function getBalls()
    {
        return $this->balls;
    }

    /**
     * Set strikes
     *
     * @param integer $strikes
     *
     * @return Game
     */
    public function setStrikes($strikes)
    {
        $this->strikes = $strikes;

        return $this;
    }

    /**
     * Get strikes
     *
     * @return integer
     */
    public function getStrikes()
    {
        return $this->strikes;
    }

    /**
     * Set currentpitcherid
     *
     * @param integer $currentpitcherid
     *
     * @return Game
     */
    public function setCurrentpitcherid($currentpitcherid)
    {
        $this->currentpitcherid = $currentpitcherid;

        return $this;
    }

    /**
     * Get currentpitcherid
     *
     * @return integer
     */
    public function getCurrentpitcherid()
    {
        return $this->currentpitcherid;
    }

    /**
     * Set currenthitterid
     *
     * @param integer $currenthitterid
     *
     * @return Game
     */
    public function setCurrenthitterid($currenthitterid)
    {
        $this->currenthitterid = $currenthitterid;

        return $this;
    }

    /**
     * Get currenthitterid
     *
     * @return integer
     */
    public function getCurrenthitterid()
    {
        return $this->currenthitterid;
    }

    /**
     * Set awayteamstartingpitcherid
     *
     * @param integer $awayteamstartingpitcherid
     *
     * @return Game
     */
    public function setAwayteamstartingpitcherid($awayteamstartingpitcherid)
    {
        $this->awayteamstartingpitcherid = $awayteamstartingpitcherid;

        return $this;
    }

    /**
     * Get awayteamstartingpitcherid
     *
     * @return integer
     */
    public function getAwayteamstartingpitcherid()
    {
        return $this->awayteamstartingpitcherid;
    }

    /**
     * Set hometeamstartingpitcherid
     *
     * @param integer $hometeamstartingpitcherid
     *
     * @return Game
     */
    public function setHometeamstartingpitcherid($hometeamstartingpitcherid)
    {
        $this->hometeamstartingpitcherid = $hometeamstartingpitcherid;

        return $this;
    }

    /**
     * Get hometeamstartingpitcherid
     *
     * @return integer
     */
    public function getHometeamstartingpitcherid()
    {
        return $this->hometeamstartingpitcherid;
    }

    /**
     * Set currentpitchingteamid
     *
     * @param integer $currentpitchingteamid
     *
     * @return Game
     */
    public function setCurrentpitchingteamid($currentpitchingteamid)
    {
        $this->currentpitchingteamid = $currentpitchingteamid;

        return $this;
    }

    /**
     * Get currentpitchingteamid
     *
     * @return integer
     */
    public function getCurrentpitchingteamid()
    {
        return $this->currentpitchingteamid;
    }

    /**
     * Set currenthittingteamid
     *
     * @param integer $currenthittingteamid
     *
     * @return Game
     */
    public function setCurrenthittingteamid($currenthittingteamid)
    {
        $this->currenthittingteamid = $currenthittingteamid;

        return $this;
    }

    /**
     * Get currenthittingteamid
     *
     * @return integer
     */
    public function getCurrenthittingteamid()
    {
        return $this->currenthittingteamid;
    }

    /**
     * Set pointspread
     *
     * @param string $pointspread
     *
     * @return Game
     */
    public function setPointspread($pointspread)
    {
        $this->pointspread = $pointspread;

        return $this;
    }

    /**
     * Get pointspread
     *
     * @return string
     */
    public function getPointspread()
    {
        return $this->pointspread;
    }

    /**
     * Set overunder
     *
     * @param string $overunder
     *
     * @return Game
     */
    public function setOverunder($overunder)
    {
        $this->overunder = $overunder;

        return $this;
    }

    /**
     * Get overunder
     *
     * @return string
     */
    public function getOverunder()
    {
        return $this->overunder;
    }

    /**
     * Set awayteammoneyline
     *
     * @param string $awayteammoneyline
     *
     * @return Game
     */
    public function setAwayteammoneyline($awayteammoneyline)
    {
        $this->awayteammoneyline = $awayteammoneyline;

        return $this;
    }

    /**
     * Get awayteammoneyline
     *
     * @return string
     */
    public function getAwayteammoneyline()
    {
        return $this->awayteammoneyline;
    }

    /**
     * Set hometeammoneyline
     *
     * @param string $hometeammoneyline
     *
     * @return Game
     */
    public function setHometeammoneyline($hometeammoneyline)
    {
        $this->hometeammoneyline = $hometeammoneyline;

        return $this;
    }

    /**
     * Get hometeammoneyline
     *
     * @return string
     */
    public function getHometeammoneyline()
    {
        return $this->hometeammoneyline;
    }

    /**
     * Set forecasttemplow
     *
     * @param string $forecasttemplow
     *
     * @return Game
     */
    public function setForecasttemplow($forecasttemplow)
    {
        $this->forecasttemplow = $forecasttemplow;

        return $this;
    }

    /**
     * Get forecasttemplow
     *
     * @return string
     */
    public function getForecasttemplow()
    {
        return $this->forecasttemplow;
    }

    /**
     * Set forecasttemphigh
     *
     * @param string $forecasttemphigh
     *
     * @return Game
     */
    public function setForecasttemphigh($forecasttemphigh)
    {
        $this->forecasttemphigh = $forecasttemphigh;

        return $this;
    }

    /**
     * Get forecasttemphigh
     *
     * @return string
     */
    public function getForecasttemphigh()
    {
        return $this->forecasttemphigh;
    }

    /**
     * Set forecastdescription
     *
     * @param string $forecastdescription
     *
     * @return Game
     */
    public function setForecastdescription($forecastdescription)
    {
        $this->forecastdescription = $forecastdescription;

        return $this;
    }

    /**
     * Get forecastdescription
     *
     * @return string
     */
    public function getForecastdescription()
    {
        return $this->forecastdescription;
    }

    /**
     * Set forecastwindchill
     *
     * @param string $forecastwindchill
     *
     * @return Game
     */
    public function setForecastwindchill($forecastwindchill)
    {
        $this->forecastwindchill = $forecastwindchill;

        return $this;
    }

    /**
     * Get forecastwindchill
     *
     * @return string
     */
    public function getForecastwindchill()
    {
        return $this->forecastwindchill;
    }

    /**
     * Set forecastwindspeed
     *
     * @param string $forecastwindspeed
     *
     * @return Game
     */
    public function setForecastwindspeed($forecastwindspeed)
    {
        $this->forecastwindspeed = $forecastwindspeed;

        return $this;
    }

    /**
     * Get forecastwindspeed
     *
     * @return string
     */
    public function getForecastwindspeed()
    {
        return $this->forecastwindspeed;
    }

    /**
     * Set forecastwinddirection
     *
     * @param string $forecastwinddirection
     *
     * @return Game
     */
    public function setForecastwinddirection($forecastwinddirection)
    {
        $this->forecastwinddirection = $forecastwinddirection;

        return $this;
    }

    /**
     * Get forecastwinddirection
     *
     * @return string
     */
    public function getForecastwinddirection()
    {
        return $this->forecastwinddirection;
    }

    /**
     * Set rescheduledfromgameid
     *
     * @param integer $rescheduledfromgameid
     *
     * @return Game
     */
    public function setRescheduledfromgameid($rescheduledfromgameid)
    {
        $this->rescheduledfromgameid = $rescheduledfromgameid;

        return $this;
    }

    /**
     * Get rescheduledfromgameid
     *
     * @return integer
     */
    public function getRescheduledfromgameid()
    {
        return $this->rescheduledfromgameid;
    }

    /**
     * Set runneronfirst
     *
     * @param string $runneronfirst
     *
     * @return Game
     */
    public function setRunneronfirst($runneronfirst)
    {
        $this->runneronfirst = $runneronfirst;

        return $this;
    }

    /**
     * Get runneronfirst
     *
     * @return string
     */
    public function getRunneronfirst()
    {
        return $this->runneronfirst;
    }

    /**
     * Set runneronsecond
     *
     * @param string $runneronsecond
     *
     * @return Game
     */
    public function setRunneronsecond($runneronsecond)
    {
        $this->runneronsecond = $runneronsecond;

        return $this;
    }

    /**
     * Get runneronsecond
     *
     * @return string
     */
    public function getRunneronsecond()
    {
        return $this->runneronsecond;
    }

    /**
     * Set runneronthird
     *
     * @param string $runneronthird
     *
     * @return Game
     */
    public function setRunneronthird($runneronthird)
    {
        $this->runneronthird = $runneronthird;

        return $this;
    }

    /**
     * Get runneronthird
     *
     * @return string
     */
    public function getRunneronthird()
    {
        return $this->runneronthird;
    }

    /**
     * Set winningpitcher
     *
     * @param string $winningpitcher
     *
     * @return Game
     */
    public function setWinningpitcher($winningpitcher)
    {
        $this->winningpitcher = $winningpitcher;

        return $this;
    }

    /**
     * Get winningpitcher
     *
     * @return string
     */
    public function getWinningpitcher()
    {
        return $this->winningpitcher;
    }

    /**
     * Set losingpitcher
     *
     * @param string $losingpitcher
     *
     * @return Game
     */
    public function setLosingpitcher($losingpitcher)
    {
        $this->losingpitcher = $losingpitcher;

        return $this;
    }

    /**
     * Get losingpitcher
     *
     * @return string
     */
    public function getLosingpitcher()
    {
        return $this->losingpitcher;
    }

    /**
     * Set savingpitcher
     *
     * @param string $savingpitcher
     *
     * @return Game
     */
    public function setSavingpitcher($savingpitcher)
    {
        $this->savingpitcher = $savingpitcher;

        return $this;
    }

    /**
     * Get savingpitcher
     *
     * @return string
     */
    public function getSavingpitcher()
    {
        return $this->savingpitcher;
    }

    /**
     * Set awayteamstartingpitcher
     *
     * @param string $awayteamstartingpitcher
     *
     * @return Game
     */
    public function setAwayteamstartingpitcher($awayteamstartingpitcher)
    {
        $this->awayteamstartingpitcher = $awayteamstartingpitcher;

        return $this;
    }

    /**
     * Get awayteamstartingpitcher
     *
     * @return string
     */
    public function getAwayteamstartingpitcher()
    {
        return $this->awayteamstartingpitcher;
    }

    /**
     * Set hometeamstartingpitcher
     *
     * @param string $hometeamstartingpitcher
     *
     * @return Game
     */
    public function setHometeamstartingpitcher($hometeamstartingpitcher)
    {
        $this->hometeamstartingpitcher = $hometeamstartingpitcher;

        return $this;
    }

    /**
     * Get hometeamstartingpitcher
     *
     * @return string
     */
    public function getHometeamstartingpitcher()
    {
        return $this->hometeamstartingpitcher;
    }

    /**
     * Set currentpitcher
     *
     * @param string $currentpitcher
     *
     * @return Game
     */
    public function setCurrentpitcher($currentpitcher)
    {
        $this->currentpitcher = $currentpitcher;

        return $this;
    }

    /**
     * Get currentpitcher
     *
     * @return string
     */
    public function getCurrentpitcher()
    {
        return $this->currentpitcher;
    }

    /**
     * Set currenthitter
     *
     * @param string $currenthitter
     *
     * @return Game
     */
    public function setCurrenthitter($currenthitter)
    {
        $this->currenthitter = $currenthitter;

        return $this;
    }

    /**
     * Get currenthitter
     *
     * @return string
     */
    public function getCurrenthitter()
    {
        return $this->currenthitter;
    }
}
