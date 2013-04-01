<?php

namespace Com\TechDivision\Neos\Search\Factory;

/*                                                                        *
 * This belongs to the TYPO3 Flow package "Com.TechDivision.Neos.Search"  *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU General Public License, either version 3 of the   *
 * License, or (at your option) any later version.                        *
 *                                                                        *
 * Copyright (C) 2013 Matthias Witte                                      *
 * http://www.matthias-witte.net                                          */

interface ResultFactoryInterface
{
	/**
	 * @param \Com\TechDivision\Search\Document\DocumentInterface $document
	 * @param \TYPO3\TYPO3CR\Domain\Model\Workspace $workspace
	 * @return \Com\TechDivision\Neos\Search\Domain\Model\Result|null
	 */
	public function createFromDocument(
		\Com\TechDivision\Search\Document\DocumentInterface $document,
		\TYPO3\TYPO3CR\Domain\Model\Workspace $workspace);

	/**
	 * @param array $documents of type \Com\TechDivision\Search\Document\DocumentInterface
	 * @param \TYPO3\TYPO3CR\Domain\Model\Workspace $workspace
	 * @param array $configuration
	 * @return array
	 */
	/**
	 * @param array $documents of type \Com\TechDivision\Search\Document\DocumentInterface
	 * @param \TYPO3\TYPO3CR\Domain\Model\Workspace $workspace
	 * @return array
	 */
	public function createMultipleFromDocuments(
			array $documents,
			\TYPO3\TYPO3CR\Domain\Model\Workspace $workspace);
}
