<?php
/**
 * Magento Chatbot Integration
 * Copyright (C) 2017  
 * 
 * This file is part of Werules/Chatbot.
 * 
 * Werules/Chatbot is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Werules\Chatbot\Model;

use Werules\Chatbot\Api\Data\ChatbotAPIInterface;

class ChatbotAPI extends \Magento\Framework\Model\AbstractModel implements ChatbotAPIInterface
{
    protected $_apiModel;
    protected $_objectManager;
    protected $_define;
    protected $_helper;
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_objectManager = \Magento\Framework\App\ObjectManager::getInstance(); // TODO find a better way to to this
        $this->_define = new \Werules\Chatbot\Helper\Define;
         $this->_helper = $this->_objectManager->create('Werules\Chatbot\Helper\Data'); // TODO find a better way to to this
        // $this->_helper = new \Werules\Chatbot\Helper\Data;
        $this->_init('Werules\Chatbot\Model\ResourceModel\ChatbotAPI');
    }

    /**
     * Get chatbotapi_id
     * @return string
     */
    public function getChatbotapiId()
    {
        return $this->getData(self::CHATBOTAPI_ID);
    }

    /**
     * Set chatbotapi_id
     * @param string $chatbotapiId
     * @return \Werules\Chatbot\Api\Data\ChatbotAPIInterface
     */
    public function setChatbotapiId($chatbotapiId)
    {
        return $this->setData(self::CHATBOTAPI_ID, $chatbotapiId);
    }

    /**
     * Get enabled
     * @return string
     */
    public function getEnabled()
    {
        return $this->getData(self::ENABLED);
    }

    /**
     * Set enabled
     * @param string $enabled
     * @return \Werules\Chatbot\Api\Data\ChatbotAPIInterface
     */
    public function setEnabled($enabled)
    {
        return $this->setData(self::ENABLED, $enabled);
    }

    /**
     * Get chatbot_type
     * @return string
     */
    public function getChatbotType()
    {
        return $this->getData(self::CHATBOT_TYPE);
    }

    /**
     * Set chatbot_type
     * @param string $chatbot_type
     * @return \Werules\Chatbot\Api\Data\ChatbotAPIInterface
     */
    public function setChatbotType($chatbot_type)
    {
        return $this->setData(self::CHATBOT_TYPE, $chatbot_type);
    }

    /**
     * Get chat_id
     * @return string
     */
    public function getChatId()
    {
        return $this->getData(self::CHAT_ID);
    }

    /**
     * Set chat_id
     * @param string $chat_id
     * @return \Werules\Chatbot\Api\Data\ChatbotAPIInterface
     */
    public function setChatId($chat_id)
    {
        return $this->setData(self::CHAT_ID, $chat_id);
    }

    /**
     * Get conversation_state
     * @return string
     */
    public function getConversationState()
    {
        return $this->getData(self::CONVERSATION_STATE);
    }

    /**
     * Set conversation_state
     * @param string $conversation_state
     * @return \Werules\Chatbot\Api\Data\ChatbotAPIInterface
     */
    public function setConversationState($conversation_state)
    {
        return $this->setData(self::CONVERSATION_STATE, $conversation_state);
    }

    /**
     * Get fallback_qty
     * @return string
     */
    public function getFallbackQty()
    {
        return $this->getData(self::FALLBACK_QTY);
    }

    /**
     * Set fallback_qty
     * @param string $fallback_qty
     * @return \Werules\Chatbot\Api\Data\ChatbotAPIInterface
     */
    public function setFallbackQty($fallback_qty)
    {
        return $this->setData(self::FALLBACK_QTY, $fallback_qty);
    }

    /**
     * Get created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Set created_at
     * @param string $created_at
     * @return \Werules\Chatbot\Api\Data\ChatbotAPIInterface
     */
    public function setCreatedAt($created_at)
    {
        return $this->setData(self::CREATED_AT, $created_at);
    }

    /**
     * Get updated_at
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->getData(self::UPDATED_AT);
    }

    /**
     * Set updated_at
     * @param string $updated_at
     * @return \Werules\Chatbot\Api\Data\ChatbotAPIInterface
     */
    public function setUpdatedAt($updated_at)
    {
        return $this->setData(self::UPDATED_AT, $updated_at);
    }

    /**
     * Get chatbotuser_id
     * @return string
     */
    public function getChatbotuserId()
    {
        return $this->getData(self::CHATBOTUSER_ID);
    }

    /**
     * Set chatbotuser_id
     * @param string $chatbotuser_id
     * @return \Werules\Chatbot\Api\Data\ChatbotAPIInterface
     */
    public function setChatbotuserId($chatbotuser_id)
    {
        return $this->setData(self::CHATBOTUSER_ID, $chatbotuser_id);
    }

    public function initMessengerAPI($bot_token) // TODO TODO TODO
    {
        return $this->_objectManager->create('Werules\Chatbot\Model\Api\Messenger', array('bot_token' => $bot_token)); // TODO find a better way to to this
    }

    // custom methods
//    public function requestHandler($api_name)
//    {
//        $this->initChatbotAPI($this->_define::MESSENGER_INT, 'needed_TODO');
////        $logger = $this->_objectManager->get('Psr\Log\LoggerInterface'); // TODO why isn't this working?
////        $logger->debug('something');
//        $this->logger($this->_apiModel);
//        return 'hello world';//array('status' => 'success');
//    }

//    public function initChatbotAPI($chatbot_type, $api_token)
//    {
//        $this->setChatbotType($chatbot_type);
//
//        if ($chatbot_type == $this->_define::MESSENGER_INT)
//        {
//            $api_token = $this->_helper->getConfigValue('werules_chatbot_messenger/general/api_key');
//            $this->_apiModel = $this->initMessengerAPI($api_token);
//        }
//    }

    public function sendMessage($message)
    {
        if ($message->getChatbotType() == $this->_define::MESSENGER_INT)
        {
            $api_token = $this->_helper->getConfigValue('werules_chatbot_messenger/general/api_key');
            $this->_apiModel = $this->initMessengerAPI($api_token);
            $this->_apiModel->sendMessage($message->getSenderId(), $message->getContent());
        }

        return true;
    }
}
