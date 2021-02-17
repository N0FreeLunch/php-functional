<?php
class Message
{
  private $message;
  private $status;
  public function __construct(string $message, string $status)
  {
    $this -> status = $status;
    $this -> message = $message;
  }

  public function getMessage()
  {
    return $this->message;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function equals($m)
  {
    return $m->status === $this->status &&
           $m->message === $this->message;
  }
  public function withStatus($status):Message
  {
    $new = clone $this;
    $new->status = $status;
    return $new;
  }
}

$message = new Message("immutable?", "good");
echo $message -> getMessage();
echo "<br>";
echo $message -> getStatus();
echo "<br>";
$equalTest = new Message("immutable?", "good");
echo $message -> equals($equalTest);
echo "<br>";
$notEqualTest = new Message("immutable?", "bad");
echo $message -> equals($notEqualTest);
echo "<br>";
$makeNewMessageObject = $message -> withStatus("good");
echo $message -> equals($makeNewMessageObject);
echo "<br>";
$changeMakeNewMessageObject = $message -> withStatus("changed");
echo $message -> equals($changeMakeNewMessageObject);
echo "<br>";

 ?>
