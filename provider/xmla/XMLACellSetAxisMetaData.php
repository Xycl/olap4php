<?php
/**
 * olap4php
 *
 * LICENSE
 *
 * Licensed to SeeWind Design Corp. under one or more
 * contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  SeeWind Design licenses
 * this file to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at:
 * http://www.apache.org/licenses/LICENSE-2.0
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 *
 * @category   olap4php
 * @copyright  See NOTICE file
 * @license    http://www.apache.org/licenses/LICENSE-2.0   Apache License, Version 2
 */
namespace OLAP4PHP\Provider\XMLA;

// Interfaces
use OLAP4PHP\OLAP\ICellSetAxisMetaData;
use OLAP4PHP\OLAP\Axis;


/**
 * @brief XMLA ICellSetAxisMetaData Implementation
 */
class XMLACellSetAxisMetaData implements ICellSetAxisMetaData
{
   /**
    * @var
    */
   private $axis;

   /**
    * @var
    */
   private $hierarchies;

   /**
    * @var
    */
   private $properties;


   /**
    * Constructor
    *
    * @param XMLAConnection $connection
    * @param Axis           $axis
    * @param                array hierarchies
    * @param array          $properties
    */
   public function __construct(
      XMLAConnection $connection,
      Axis  $axis,
      array $hierarchies,
      array $properties )
   {
      $this->axis        = $axis;
      $this->hierarchies = $hierarchies;
      $this->properties  = $properties;
   }

   /**
    * @return array IAxis
    */
   public function getAxisOrdinal()
   {
      return $this->axis->axisOrdinal();
   }

   /**
    * @return array IHierarchy
    */
   public function getHierarchies()
   {
      return $this->hierarchies;
   }

   /**
    * @return array IProperty
    */
   public function getProperties()
   {
      return $this->hierarchies;
   }

   /**
    * Lookup a property in a hierarchy
    *
    * @param $hierarchyName
    * @param $tag
    *
    * @return XMLACellSetMemberProperty
    */
   public function lookupProperty( $hierarchyName, $tag )
   {
   }
}
