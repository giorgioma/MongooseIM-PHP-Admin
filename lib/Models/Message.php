<?php
/**
 * Message
 *
 * PHP version 5
 *
 * @category Class
 * @package  MongooseIM\Admin
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MongooseIM's REST API for backend administration
 *
 * Explore MongooseIM features using our REST API.  If you are familiar with the `mongooseimctl` command, the provided control functionality will seem very similar. The response objects are modeled on the `ejabberd_commands` entries and print-outs from `mongooseimctl`.  Please note that many of the fields such as **username** or **caller** expect a **JID** (jabber identifier, f.e. **alice@wonderland.com**). There are two types of **JIDs**:   * **bare JID** - consists of **username** and **domain name** (XMPP host, usually the one set in your `ejabberd.cfg` file).   * **full JID** - is a **bare JID** with online user's resource to uniquely identify user's connection (f.e. **alice@wonderland.com/resource**).
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MongooseIM\Admin\Models;

use \ArrayAccess;

/**
 * Message Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     MongooseIM\Admin
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Message implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'message';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'caller' => 'string',
        'to' => 'string',
        'body' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'caller' => 'caller',
        'to' => 'to',
        'body' => 'body'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'caller' => 'setCaller',
        'to' => 'setTo',
        'body' => 'setBody'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'caller' => 'getCaller',
        'to' => 'getTo',
        'body' => 'getBody'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['caller'] = isset($data['caller']) ? $data['caller'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets caller
     * @return string
     */
    public function getCaller()
    {
        return $this->container['caller'];
    }

    /**
     * Sets caller
     * @param string $caller the sender of the message
     * @return $this
     */
    public function setCaller($caller)
    {
        $this->container['caller'] = $caller;

        return $this;
    }

    /**
     * Gets to
     * @return string
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     * @param string $to the recipient of the message
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets body
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     * @param string $body the message text
     * @return $this
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\MongooseIM\Admin\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\MongooseIM\Admin\ObjectSerializer::sanitizeForSerialization($this));
    }
}


