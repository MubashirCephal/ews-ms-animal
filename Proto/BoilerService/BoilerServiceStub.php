<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\BoilerService;

/**
 */
class BoilerServiceStub {

    /**
     * @param \Proto\BoilerService\PingRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\BoilerService\PingResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function Ping(
        \Proto\BoilerService\PingRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\BoilerService\PingResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * Get the method descriptors of the service for server registration
     *
     * @return array of \Grpc\MethodDescriptor for the service methods
     */
    public final function getMethodDescriptors(): array
    {
        return [
            '/BoilerServicePackage.BoilerService/Ping' => new \Grpc\MethodDescriptor(
                $this,
                'Ping',
                '\Proto\BoilerService\PingRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
