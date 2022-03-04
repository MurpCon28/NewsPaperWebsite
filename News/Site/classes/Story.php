<?php

class Story {
    public $id;
    public $mainHeadline;
    public $backupHeadline;
	public $keyInfo;
	public $story;
	public $summaryStory;
	public $dateWritten;
	public $timeWritten;
	public $storyTypeID;
	public $wirtterID;
	public $areaWritten;
    

    public function save() {
        $params = array(
            'mainHeadline' => $this->mainHeadline,
			'backupHeadline' => $this->backupHeadline,
			'keyInfo' => $this->keyInfo,
			'story' => $this->story,
			'summaryStory' => $this->summaryStory,
			'dateWritten' => $this->dateWritten,
			'timeWritten' => $this->timeWritten,
			'storyTypeID' => $this->storyTypeID,
			'writerID' => $this->writerID,
            'areWritten' => $this->areWritten
            
        );

        $sql = "INSERT INTO stories(
                    mainHeadline, backupHeadline, keyInfo, story, summaryStory, dateWritten, timeWritten, storyTypeID, writerID, areWritten
                ) VALUES (
                    :mainHeadline, :backupHeadline, :keyInfo, :story, :summaryStory, :dateWritten, :timeWritten, :storyTypeID, :writerID, :areaWritten
                )";

        $conn = Connection::getInstance();
        $stmt = $conn->prepare($sql);
        $success = $stmt->execute($params);
        if (!$success) {
            throw new Exception("Failed to save story");
        }
        else {
            $rowCount = $stmt->rowCount();
            if ($rowCount !== 1) {
                throw new Exception("Error saving story");
            }
           
            $this->id = $conn->lastInsertId('stories');
            
        }
    }

     public static function selectAll($limit, $offset = 0)
    {
        $sql = 'SELECT * FROM stories ORDER BY dateWritten DESC LIMIT ' . $limit . ' OFFSET ' . $offset;
        $connection = Connection::getInstance();
        $stmt = $connection->prepare($sql);
        $success = $stmt->execute();
        if (!$success) {
            throw new Exception("Failed to retrieve stories");
        } else {
            $stories = $stmt->fetchAll(PDO::FETCH_CLASS, 'Story');
            return $stories;
        }
    }

    public static function selectByCategory($category, $limit, $offset = 0)
    {
        $sql = "SELECT id FROM storytypeid WHERE name = '" . $category . "' LIMIT 1";
        $connection = Connection::getInstance();
        $stmt = $connection->prepare($sql);
        $success = $stmt->execute();
        if (!$success) {
            throw new Exception("Failed to retrieve category");
        } else {
            $storyTypeID = $stmt->fetch()[0];

            $sql = 'SELECT * FROM stories WHERE storyTypeID = ' . $storyTypeID . ' ORDER BY dateWritten DESC LIMIT ' . $limit . ' OFFSET ' . $offset;
            $connection = Connection::getInstance();
            $stmt = $connection->prepare($sql);
            $success = $stmt->execute();
            if (!$success) {
                throw new Exception("Failed to retrieve stories");
            } else {
                $stories = $stmt->fetchAll(PDO::FETCH_CLASS, 'Story');
                return $stories;
            }
        }
    }
	
    public static function find($id) {
        $params = array(
            'id' => $id
        );
        $sql = 'SELECT * FROM stories WHERE id = :id';
        $connection = Connection::getInstance();
        $stmt = $connection->prepare($sql);
        $success = $stmt->execute($params);
        if (!$success) {
            throw new Exception("Failed to retrieve story");
        }
        else {
            $story = $stmt->fetchObject('Story');
            return $story;
        }
    }
    

   
}
?>
