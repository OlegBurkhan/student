<?php
include_once __DIR__ . './../../API/Data/MessageModelInterface.php'; // <- __DIR__ https://ru.stackoverflow.com/questions/524373/
include_once __DIR__ . './../MessageModel.php';
include_once __DIR__ . "./../db.php";

class MessageRepository
{
    /**
     * @var DataBase
     */
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    /**
     * Сохраняем данные модели в базу данных
     *
     * @param MessageModelInterface $messageModel
     * @return MessageModelInterface
     */
    public function save(MessageModelInterface $messageModel): MessageModelInterface
    {
        try {
            $connection =  $this->db->getDB();
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Надо чтобы были выведенеы ошибки с базы в случае чего
            $data = [
                'message' => $messageModel->getMessage(),
                'email' => $messageModel->getEmail(),
                'sender_name' => $messageModel->getSenderName(),
                'attached_file' => $messageModel->getAttachedFile(),
                'ip' => $messageModel->getIp(),
                'user_agent' => $messageModel->getUserAgent()
            ];
            if ($messageModel->getMessageId()) {
                $data['message_id'] = $messageModel->getMessageId();
                $sql = 'UPDATE `messages` SET 
                      `message` = :message, 
                      `email` = :email, 
                      `sender_name` = :sender_name, 
                      `attached_file` = :attached_file, 
                      `ip` = :ip, 
                      `user_agent` = :user_agent 
                WHERE `message_id` = :message_id';
            } else {
                $sql = 'INSERT INTO `messages` (`message`, `email`, `sender_name`, `attached_file`, `ip`, `user_agent`) 
                        VALUES (:message, :email, :sender_name, :attached_file, :ip, :user_agent)';
            }
            $statement  = $connection->prepare($sql);
            $statement->execute($data);

            $messageId = $connection->lastInsertId(); // берем id последней вставленной записи
            $messageModel->setMessageId((int) $messageId); // <- помним что аргумент ожидается типа int
        } catch (PDOException $e) { // <- https://www.youtube.com/watch?v=YS2tHXIJX7U посмотреть про исключения
            throw new Exception($e->getMessage());
        }

        return $messageModel;
    }

    /**
     * Ищем Сообщение по id и возвращаем в виде объекта модели
     *
     * @param int $id
     * @return MessageModelInterface
     */
    public function getById(int $id): MessageModelInterface
    {
        $row = $this->db->getDB()->query('SELECT * FROM `messages` WHERE message_id = ?', [$id])->fetch();

        $model = new MessageModel();
        if ($row) {
            $model->setMessageId($row['message_id'])
                ->setMessage($row['message'])
                ->setSenderName($row['sender_name'])
                ->setIp($row['ip'])
                ->setUserAgent($row['user_agent'])
                ->setAttachedFile($row['attached_file']);
        }

        return $model;
    }

    /**
     * Возвращаем массив сообщений
     *
     * @return array
     */
    public function getList(): array
    {
        return $this->db->getDB()->query('SELECT * FROM messages')->fetchAll() ?? [];
    }
}









