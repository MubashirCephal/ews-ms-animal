<?php

namespace App\Interfaces;

interface AnimalPostmortemServiceInterface
{
     /**
     * @param \Proto\AnimalPostmortemService\GetAnimalPostmortemsRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalPostmortemService\GetAnimalPostmortemsResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetAnimalPostmortems(
        \Proto\AnimalPostmortemService\GetAnimalPostmortemsRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalPostmortemService\GetAnimalPostmortemsResponse;

    
    /**
     * @param \Proto\AnimalPostmortemService\CreateAnimalPostmortemRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalPostmortemService\CreateAnimalPostmortemResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function CreateAnimalPostmortem(
        \Proto\AnimalPostmortemService\CreateAnimalPostmortemRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalPostmortemService\CreateAnimalPostmortemResponse;



}
