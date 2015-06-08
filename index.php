<?php
  // Criando um elemento raiz vazio
  $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><doi_batch />');
  $xml->addAttribute('version', '4.3.5');
  $xml->addAttribute('xsi:schemaLocation', 'http://www.crossref.org/schema/4.3.5 http://www.crossref.org/schemas/crossref4.3.5.xsd');

  $head = $xml->addChild('head');
  $head->addChild('doi_batch_id', 'cbee-2');
  $head->addChild('timestamp', date('YmdHis'));
  $depositor = $head->addChild('depositor');
  $depositor->addChild('depositor_name', 'Galoa');
  $depositor->addChild('email_address', 'fabiano@galoa.com.br');
  $head->addChild('registrant', 'Galoá { Software para Ciência');
  
  $body = $xml->addChild('body');
  $conference = $body->addChild('conference');
  $eventMetadata = $conference->addChild('event_metadata');
  $eventMetadata->addChild('conference_name', 'Congresso Brasileiro de Educação Especial');
  $eventMetadata->addChild('conference_acronym', 'CBEE 6');
  $eventMetadata->addChild('conference_number', 'VI');
  $conferenceDate = $eventMetadata->addChild('conference_date', 'November 1-4, 2014');
  $conferenceDate->addAttribute('start_day', '01');
  $conferenceDate->addAttribute('start_month', '11');
  $conferenceDate->addAttribute('start_year', '2014');
  $conferenceDate->addAttribute('end_day', '04');
  $conferenceDate->addAttribute('end_month', '11');
  $conferenceDate->addAttribute('end_year', '2014');
  $proceedingsSeriesMetadata = $conference->addChild('proceedings_series_metadata');
  $seriesMetadata = $proceedingsSeriesMetadata->addChild('series_metadata');
  $titles = $seriesMetadata->addChild('titles');
  $titles->addChild('title', 'Anais do Congresso Brasileiro de Educação Especial');
  $seriesMetadata->addChild('issn', '23592109');
  $proceedingsTitle = $proceedingsSeriesMetadata->addChild('proceedings_title', 'Congresso Brasileiro de Educação Especial Proceeding Series');
  $volume = $proceedingsSeriesMetadata->addChild('volume', 'VI');
  $publisher = $proceedingsSeriesMetadata->addChild('publisher');
  $publisher->addChild('publisher_name', 'Galoá');
  $publisher->addChild('publisher_place', 'Campinas - SP, Brazil');
  $publicationDate = $proceedingsSeriesMetadata->addChild('publication_date');
  $publicationDate->addAttribute('media_type', 'online');
  $publicationDate->addChild('month', '11');
  $publicationDate->addChild('day', '05');
  $publicationDate->addChild('year', '2014');
  $noisbn = $proceedingsSeriesMetadata->addChild('noisbn');
  $noisbn->addAttribute('reason', 'archive_volume');
  $doiData = $proceedingsSeriesMetadata->addChild('doi_data');
  $doiData->addChild('doi', '10.17648/galoa-cbee-6');
  $doiData->addChild('resource', 'http://proceedings.galoa.com.br/cbee/6');

  echo $xml->asXML();
?>
