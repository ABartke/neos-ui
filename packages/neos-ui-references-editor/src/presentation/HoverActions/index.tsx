import React, {PropsWithChildren} from 'react';
import {IconButton} from '@neos-project/react-ui-components';
import style from './style.module.css';

interface HoverActionsProps {
    onEdit?: () => void;
    isEditDisabled?: boolean;
    onDelete?: () => void;
    // optionally control visibility externally in future; for now purely hover-based
}

export const HoverActions: React.FC<PropsWithChildren<HoverActionsProps>> = ({children, onEdit, isEditDisabled, onDelete}) => {
    return (
        <div className={style.wrapper}>
            {children}
            <div className={style.actions}>
                {onEdit && (
                    <IconButton
                        icon="arrows-left-right-to-line"
                        hoverStyle="brand"
                        title="Edit"
                        disabled={isEditDisabled}
                        onClick={onEdit}
                        size="regular"
                    />
                )}
                <IconButton
                    icon="trash"
                    hoverStyle="warn"
                    title="Delete"
                    onClick={onDelete}
                    size="regular"
                />
            </div>
        </div>
    );
};
